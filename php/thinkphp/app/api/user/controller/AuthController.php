<?php

declare(strict_types=1);

namespace app\api\user\controller;

use app\api\user\response\auth\LoginResponse;
use Juling\Foundation\Exception\CustomException;
use Juling\Foundation\Response\JsonResponse;
use Juling\Foundation\Routing\Controller;
use OpenApi\Attributes as OA;
use think\exception\ValidateException;
use think\facade\Cache;
use think\facade\Log;
use think\facade\Validate;
use think\Request;
use think\response\Json;
use Throwable;

class AuthController extends Controller
{
    use JsonResponse;

    #[OA\Post(path: '/login', summary: '用户登录接口', tags: ['认证模块'])]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: LoginResponse::class))]
    public function login(Request $request): Json
    {
        try {
            $formData = $request->post();

            $v = new LoginRequest;
            if (! $v->check($formData)) {
                throw new CustomException($v->getError());
            }

            $loginInput = new LoginInput;
            $loginInput->setUsername($formData['username']);
            $loginInput->setPassword($formData['password']);
            $loginInput->setRememberMe($formData['remember'] === 'on');

            $loginBundleService = new LoginBundleService;
            if ($loginBundleService->login($loginInput)) {
                return $this->success('ok');
            }

            throw new CustomException('登录失败');
        } catch (Throwable $e) {
            Log::error($e);

            if ($e instanceof CustomException || $e instanceof ValidateException) {
                return $this->error($e->getMessage());
            }

            return $this->error('请求错误，请稍后再试。');
        }
    }

    #[OA\Post(path: '/forget', summary: '用户忘记密码', tags: ['认证模块'])]
    #[OA\Response(response: 200, description: 'OK')]
    public function forget(Request $request): Json
    {
        try {
            $formData = $request->post();

            $v = new ForgetRequest;
            if (! $v->check($formData)) {
                throw new CustomException($v->getError());
            }

            return $this->success('data');
        } catch (Throwable $e) {
            Log::error($e);

            if ($e instanceof CustomException || $e instanceof ValidateException) {
                return $this->error($e->getMessage());
            }

            return $this->error('请求错误，请稍后再试。');
        }
    }

    #[OA\Post(path: '/reset', summary: '用户重设密码', tags: ['认证模块'])]
    #[OA\Response(response: 200, description: 'OK')]
    public function reset(Request $request): Json
    {
        $mobile = $this->request->post('mobile', '');
        $code = $this->request->post('code', '');
        $password = $this->request->post('password', '');
        $repassword = $this->request->post('repassword', '');

        // 验证参数
        $validate = Validate::rule([
            'mobile' => 'require|mobile',
            'code' => 'require|length:6',
            'password' => 'require|length:6,20',
            'repassword' => 'require|confirm:password',
        ])->message([
            'mobile.require' => '请输入手机号',
            'mobile.mobile' => '手机号格式不正确',
            'code.require' => '请输入验证码',
            'code.length' => '验证码长度不正确',
            'password.require' => '请输入新密码',
            'password.length' => '密码长度为6-20位',
            'repassword.require' => '请确认密码',
            'repassword.confirm' => '两次密码输入不一致',
        ]);

        if (! $validate->check([
            'mobile' => $mobile,
            'code' => $code,
            'password' => $password,
            'repassword' => $repassword,
        ])) {
            return $this->fail($validate->getError());
        }

        // 验证验证码
        $cacheKey = 'forget_code_'.$mobile;
        $cacheCode = Cache::get($cacheKey);
        if (! $cacheCode || $cacheCode != $code) {
            return $this->fail('验证码错误或已过期');
        }

        // 查找用户
        $user = User::where('mobile', $mobile)->find();
        if (! $user) {
            return $this->fail('该手机号未注册');
        }

        // 更新密码
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->save();

        // 删除验证码缓存
        Cache::delete($cacheKey);

        // return $this->success('密码重置成功');

        try {
            $formData = $request->post();

            $v = new ResetRequest;
            if (! $v->check($formData)) {
                throw new CustomException($v->getError());
            }

            return $this->success('data');
        } catch (Throwable $e) {
            Log::error($e);

            if ($e instanceof CustomException || $e instanceof ValidateException) {
                return $this->error($e->getMessage());
            }

            return $this->error('请求错误，请稍后再试。');
        }
    }
}
