<?php

namespace app\service\auth;

use app\service\user\UserService;
use app\service\wechat\WechatService;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\OfficialAccount\Application;
use GuzzleHttp\Exception\GuzzleException;
use Overtrue\Socialite\Exceptions\AuthorizeFailedException;
use think\Request;
use think\response\Json;
use think\response\Redirect;

class OAuthService
{
    /**
     * @var UserService
     */
    private UserService $userService;

    /**
     * @var WechatService
     */
    private WechatService $wechatService;

    /**
     * @var Application
     */
    private Application $wechat;

    /**
     * __construct
     * @throws InvalidArgumentException
     */
    public function __construct()
    {
        $this->userService = new UserService();
        $this->wechatService = new WechatService();
        $this->wechat = $this->wechatService->officialAccount();
    }

    /**
     * 生成授权链接
     *
     * @param  Request  $request
     * @return Redirect
     */
    public function redirect(Request $request): Redirect
    {
        $config = config('wechat.official_account.oauth');

        $callbackUrl = url($config['callback'], $request->get())->domain(true);

        $redirectUrl = $this->wechat->oauth->scopes($config['scopes'])->redirect($callbackUrl);

        return redirect($redirectUrl);
    }

    /**
     * 授权回调
     *
     * @param  Request  $request
     * @return Json
     *
     * @throws GuzzleException
     * @throws AuthorizeFailedException
     */
    public function callback(Request $request): Json
    {
        $code = $request->get('code');

        if (empty($code)) {
            return $this->failed('Wechat authorization callback failed');
        }

        $user = $this->wechat->oauth->userFromCode($code);

        $userId = $this->userService->userInfoUpdateOrInsert($user);

        return $this->succeed($userId);
    }
}
