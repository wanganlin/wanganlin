<?php

declare(strict_types=1);

namespace App\Support;

use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

class StdoutLoggerFactory
{
    /**
     * @param ContainerInterface $container
     * @return LoggerInterface
     */
    public function __invoke(ContainerInterface $container): LoggerInterface
    {
        return Log::get('sys');
    }
}
