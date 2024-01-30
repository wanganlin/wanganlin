<?php

declare(strict_types=1);

namespace app\foundation\command\migrate;

use think\console\input\Option as InputOption;
use think\migration\command\migrate\Run;

class MigrateCommand extends Run
{
    protected function configure(): void
    {
        $this->setName('migrate:run2')
            ->setDescription('Migrate the database')
            ->addOption('--target', '-t', InputOption::VALUE_REQUIRED, 'The version number to migrate to')
            ->addOption('--date', '-d', InputOption::VALUE_REQUIRED, 'The date to migrate to')
            ->setHelp(<<<'EOT'
The <info>migrate:run</info> command runs all available migrations, optionally up to a specific version

<info>php artisan migrate:run</info>
<info>php artisan migrate:run -t 20110103081132</info>
<info>php artisan migrate:run -d 20110103</info>
<info>php artisan migrate:run -v</info>
EOT
            );
    }

    protected function getPath(): string
    {
        return $this->app->getAppPath().'bundle'.DIRECTORY_SEPARATOR.'*'.DIRECTORY_SEPARATOR.'migrations';
    }
}
