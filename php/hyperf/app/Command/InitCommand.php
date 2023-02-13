<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Command as BaseCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;

#[Command]
class InitCommand extends BaseCommand
{
    public function __construct(protected ContainerInterface $container)
    {
        parent::__construct('init');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Project init command');
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
                'withAddedHeader(\'Server\', \'Hyperf\')' => 'withAddedHeader(\'Server\', \'DWS/1.0\')',
            ],
            'http-server/src/Router/DispatcherFactory.php' => [
                'config/routes.php' => 'routes/route.php',
            ],
            'di/src/ScanHandler/ProcScanHandler.php' => [
                'bin/hyperf.php' => 'artisan',
            ],
            'phar/src/PharBuilder.php' => [
                'bin/hyperf.php' => 'artisan',
            ],
            'phar/src/BuildCommand.php' => [
                'bin/hyperf.php' => 'artisan',
            ],
        ];

        foreach ($rules as $file => $rule) {
            $content = file_get_contents($path . $file);

            $content = str_replace(array_keys($rule), array_values($rule), $content);

            file_put_contents($path . $file, $content);
        }
    }
}
