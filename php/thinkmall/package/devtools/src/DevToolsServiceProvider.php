<?php

declare(strict_types=1);

namespace Juling\DevTools;

use think\Service as ServiceProvider;

class DevToolsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // 服务注册
    }

    public function boot(): void
    {
        $this->commands([
            Commands\Gen\GenDictCommand::class,
            Commands\Gen\GenEntityCommand::class,
            Commands\Gen\GenInterfaceCommand::class,
            Commands\Gen\GenModelCommand::class,
            Commands\Gen\GenRepositoryCommand::class,
            Commands\Gen\GenServiceCommand::class,
            Commands\Migrate\MigrateCommand::class,
            Commands\Seed\SeedCommand::class,
        ]);
    }
}