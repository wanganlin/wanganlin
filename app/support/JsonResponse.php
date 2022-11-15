<?php

namespace app\support;

use Yii;
use yii\web\Response;

trait JsonResponse
{
    /**
     * 成功返回
     * @param $data
     * @param array $headers
     * @return Response
     */
    protected function success($data, array $headers = []): Response
    {
        return $this->response([
            'code' => 200,
            'message' => 'ok',
            'data' => $data
        ], $headers);
    }

    /**
     * 错误返回
     * @param int $code
     * @param string $message
     * @param array $headers
     * @return Response
     */
    protected function fail(int $code, string $message, array $headers = []): Response
    {
        return $this->response([
            'code' => $code,
            'message' => $message,
            'data' => null,
            'time' => date('Y-m-d H:i:s'),
        ], $headers);
    }

    /**
     * 返回 Json 数据格式
     * @param $data
     * @param array $headers
     * @param string $name
     * @return Response
     */
    protected function response($data, array $headers = [], string $name = 'X-Client-Id'): Response
    {
        $request = Yii::$app->getRequest();
        $response = Yii::$app->getResponse();

        $clientId = $request->headers->get($name, md5($this->createSessionId()));
        $response->headers->set($name, $clientId);

        foreach ($headers as $header) {
            $response->headers->set(array_key_first($header), array_values($header));
        }

        return $this->asJson($data);
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
