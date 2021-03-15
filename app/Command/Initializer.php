<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as BaseCommand;
use Psr\Container\ContainerInterface;

/**
 * @Command
 * Class Initializer
 * @package App\Command
 */
class Initializer extends BaseCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('init');
    }

    public function configure()
    {
        $this->setDescription('Composer Project Init Command');
    }

    public function handle()
    {
        $path = BASE_PATH . '/vendor/hyperf/';

        $rules = [
            'database/src/Commands/Migrations/BaseCommand.php' => [
                '\'migrations\'' => '\'database/migrations\'',
            ],
            'database/src/Commands/Seeders/BaseCommand.php' => [
                '\'seeders\'' => '\'database/seeders\'',
            ],
            'http-server/src/CoreMiddleware.php' => [
                'withAddedHeader(\'Server\', \'Hyperf\')' => 'withAddedHeader(\'Server\', \'Hyperman\')',
            ],
            'http-server/src/Router/DispatcherFactory.php' => [
                'config/routes.php' => 'routes/route.php',
            ],
        ];

        foreach ($rules as $file => $rule) {
            $content = file_get_contents($path . $file);

            $content = str_replace(array_keys($rule), array_values($rule), $content);

            file_put_contents($path . $file, $content);
        }
    }
}
