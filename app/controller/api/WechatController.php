<?php

declare(strict_types=1);

namespace app\controller\api;

use app\service\wechat\WechatService;
use think\facade\Log;

class WechatController extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        try {
            $wechatService = new WechatService();
            $officialAccount = $wechatService->officialAccount();
            $server = $officialAccount->getServer();
            return $server->serve()->getBody()->getContents();
        } catch (\Throwable $e) {
            Log::error(sprintf('%s[line:%d;error:%s]', __FILE__, __LINE__, $e->getMessage()));
            return 'error';
        }
    }
}
