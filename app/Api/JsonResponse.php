<?php

declare(strict_types=1);

namespace App\Api;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * Trait JsonResponse
 * @package App\Api
 */
trait JsonResponse
{
    /**
     * @var int
     */
    protected int $errorCode = 0;

    /**
     * @return int
     */
    protected function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return $this
     */
    protected function setErrorCode(int $errorCode): JsonResponse
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * 返回封装后的API数据到客户端
     * @access protected
     * @param mixed $data 要返回的数据
     * @param array $headers 发送的Header信息
     * @return ResponseInterface
     */
    protected function succeed($data, array $headers = []): ResponseInterface
    {
        $response = $this->response([
            'status' => 'success',
            'data' => $data,
        ]);

        foreach ($headers as $header) {
            $response = $response->withHeader(key($header), value($header));
        }

        return $response;
    }

    /**
     * 返回异常数据到客户端
     * @param $message
     * @return ResponseInterface
     */
    protected function failed($message): ResponseInterface
    {
        return $this->response([
            'status' => 'failed',
            'errors' => [
                'code' => $this->getErrorCode(),
                'message' => $message,
            ],
        ]);
    }

    /**
     * 返回 Json 数据格式
     * @param $data
     * @param $name
     * @return ResponseInterface
     */
    protected function response($data, $name = 'X-Client-Id'): ResponseInterface
    {
        $request = app(RequestInterface::class);
        $response = app(ResponseInterface::class);

        $clientId = $request->header($name);
        if (empty($clientId)) {
            $clientId = session('[ID]');
        }

        return $response->json($data)->withHeader($name, $clientId);
    }
}
