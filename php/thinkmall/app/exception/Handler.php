<?php

declare(strict_types=1);

namespace app\exception;

use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\Handle;
use think\exception\HttpException;
use think\exception\HttpResponseException;
use think\exception\ValidateException;
use think\Response;
use Throwable;

class Handler extends Handle
{
    /**
     * 不需要记录信息（日志）的异常类列表
     *
     * @var array
     */
    protected $ignoreReport = [
        HttpException::class,
        HttpResponseException::class,
        ModelNotFoundException::class,
        DataNotFoundException::class,
        ValidateException::class,
    ];

    /**
     * 记录异常信息（包括日志或者其它方式记录）
     */
    public function report(Throwable $exception): void
    {
        // 使用内置的方式记录异常日志
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \think\Request  $request
     */
    public function render($request, Throwable $e): Response
    {
        // 添加自定义异常处理机制
        if (str_contains($request->pathinfo(), 'api/') || $request->isAjax()) {
            return json(['code' => 40001, 'message' => $e->getMessage(), 'data' => null]);
        }

        // 其他错误交给系统处理
        return parent::render($request, $e);
    }
}
