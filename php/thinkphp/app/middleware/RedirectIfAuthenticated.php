<?php

declare(strict_types=1);

namespace app\middleware;

use app\foundation\constant\GlobalConst;
use Closure;
use think\Request;
use think\Response;

class RedirectIfAuthenticated
{
    /**
     * 处理请求
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session('?'.GlobalConst::AuthName)) {
            if ($request->isAjax()) {
                return json([
                    'code' => 40001,
                    'message' => 'Forbidden',
                    'data' => null,
                ]);
            } else {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
