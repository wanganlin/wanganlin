<?php

declare(strict_types=1);

namespace App\Support;

use Hyperf\Logger\LoggerFactory;
use Hyperf\Utils\ApplicationContext;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Log\LoggerInterface;

class Log
{
    /**
     * @param string $name
     * @param string $group
     * @return LoggerInterface|null
     */
    public static function get(string $name = 'app', string $group = 'default'): ?LoggerInterface
    {
        try {
            return ApplicationContext::getContainer()->get(LoggerFactory::class)->get($name, $group);
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            return null;
        }
    }
}
