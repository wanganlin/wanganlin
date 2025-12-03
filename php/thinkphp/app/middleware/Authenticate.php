<?php

declare(strict_types=1);

namespace app\middleware;

use Closure;
use think\Request;
use think\Response;

class Authenticate
{
    public function handle(Request $request, Closure $next, string $guards): Response
    {
        $token = $request->header('Authorization', '');
        $data = getToken($token, config('jwt.key') ?? '');
        if (empty($data[$guards])) {
            return json([
                'code' => 401,
                'message' => 'Unauthorized',
                'data' => null,
            ]);
        }

        return $next($request);
    }
}
