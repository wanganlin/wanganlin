<?php

namespace App\Support;

use Illuminate\Http\JsonResponse as Json;

trait JsonResponse
{
    /**
     * 成功返回
     * @param $data
     * @param array $headers
     * @return Json
     */
    protected function success($data, array $headers = []): Json
    {
        return $this->response([
            'code' => 0,
            'message' => 'ok',
            'data' => $data
        ], $headers);
    }

    /**
     * 错误返回
     * @param string $message
     * @param int $code
     * @param array $headers
     * @return Json
     */
    protected function error(string $message, int $code = 40001, array $headers = []): Json
    {
        return $this->response([
            'code' => $code,
            'message' => $message,
            'data' => null
        ], $headers);
    }

    /**
     * 返回 Json 数据格式
     * @param $data
     * @param array $headers
     * @param string $name
     * @return Json
     */
    protected function response($data, array $headers = [], string $name = 'X-Client-Id'): Json
    {
        $clientId = request()->header($name, md5($this->createSessionId()));

        return response()->json($data, 200, array_merge($headers, [$name => $clientId]));
    }

    /**
     * 创建 Session ID
     * @return string
     */
    protected function createSessionId(): string
    {
        return bin2hex(pack('d', microtime(true)) . pack('N', mt_rand()));
    }
}
