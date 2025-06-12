<?php

declare(strict_types=1);

namespace app\middleware;

use app\constant\GlobalConst;
use Closure;
use think\Request;
use think\Response;

class Authenticate
{
    /**
     * 处理请求
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! session('?'.GlobalConst::AuthName)) {
            if (str_contains($request->pathinfo(), 'api/') || $request->isAjax()) {
                return json([
                    'code' => 40001,
                    'message' => 'Unauthorized',
                    'data' => null,
                ]);
            } else {
                $callback = urlencode($request->url(true));

                return redirect('/passport/login?callback='.$callback);
            }
        }

        return $next($request);
    }
}
