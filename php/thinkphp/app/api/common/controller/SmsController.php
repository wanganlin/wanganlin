<?php

declare(strict_types=1);

namespace app\api\common\controller;

use OpenApi\Attributes as OA;
use think\facade\Cache;
use think\facade\Validate;
use think\response\Json;

class SmsController extends BaseController
{
    #[OA\Post(path: '/sms/send', summary: '发送短信验证码接口', tags: ['公共模块'])]
    #[OA\Response(response: 200, description: 'OK')]
    public function send(): Json
    {
        $mobile = $this->request->post('mobile', '');

        // 验证手机号
        $validate = Validate::rule([
            'mobile' => 'require|mobile',
        ])->message([
            'mobile.require' => '请输入手机号',
            'mobile.mobile' => '手机号格式不正确',
        ]);

        if (! $validate->check(['mobile' => $mobile])) {
            return $this->error($validate->getError());
        }

        // 检查用户是否存在
        $user = User::where('mobile', $mobile)->find();
        if (! $user) {
            return $this->error('该手机号未注册');
        }

        // 检查发送频率
        $cacheKey = 'forget_code_'.$mobile;
        if (Cache::has($cacheKey)) {
            return $this->error('验证码已发送，请稍后再试');
        }

        // 生成验证码
        $code = mt_rand(100000, 999999);

        // 缓存验证码，有效期5分钟
        Cache::set($cacheKey, $code, 300);

        // TODO: 调用短信服务发送验证码
        // 开发环境直接返回验证码
        if (config('app.app_debug')) {
            return $this->success('验证码发送成功', ['code' => $code]);
        }

        return $this->success('验证码发送成功');
    }
}
