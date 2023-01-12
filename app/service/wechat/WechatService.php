<?php

namespace app\service\wechat;

use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\OfficialAccount\Application;
use think\facade\Log;

/**
 * Class WechatService
 */
class WechatService
{
    /**
     * 获取微信公众平台实例
     * @return Application|null
     */
    public function officialAccount(): ?Application
    {
        try {
            $config = config('wechat.official_account');
            return new Application($config);
        } catch (InvalidArgumentException $e) {
            Log::error($e->getMessage());
            return null;
        }
    }
}
