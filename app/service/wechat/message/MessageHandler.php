<?php

declare(strict_types=1);

namespace app\service\wechat\message;

use Closure;

class MessageHandler
{
    public function __invoke($message, Closure $next)
    {
        if ($message->MsgType === 'text') {
            //...
        }

        return $next($message);
    }
}
