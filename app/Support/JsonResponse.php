<?php

declare(strict_types=1);

namespace App\Support;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

trait JsonResponse
{
    /**
     * 返回封装后的API数据到客户端
     * @access protected
     * @param mixed $data 要返回的数据
     * @param array $headers 发送的Header信息
     * @return PsrResponseInterface
     */
    protected function success($data, array $headers = []): PsrResponseInterface
    {
        return $this->response([
            'code' => 0,
            'message' => 'ok',
            'data' => $data,
        ], $headers);
    }

    /**
     * 返回异常数据到客户端
     * @param $message
     * @param int $code
     * @param array $headers
     * @return PsrResponseInterface
     */
    protected function error($message, int $code = 40001, array $headers = []): PsrResponseInterface
    {
        return $this->response([
            'code' => $code,
            'message' => $message,
            'data' => null,
        ], $headers);
    }

    /**
     * 返回 Json 数据格式
     * @param $data
     * @param string $name
     * @param array $headers
     * @return PsrResponseInterface
     */
    protected function response($data, array $headers = [], string $name = 'X-Client-Id'): PsrResponseInterface
    {
        $request = app(RequestInterface::class);
        $response = app(ResponseInterface::class);

        $response = $response->json($data);
        foreach ($headers as $header) {
            $response = $response->withHeader(key($header), value($header));
        }

        $clientId = $request->header($name, $this->createSessionId());

        return $response->withHeader($name, $clientId);
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
