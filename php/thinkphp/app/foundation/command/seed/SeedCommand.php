<?php

declare(strict_types=1);

namespace app\foundation\command\seed;

use think\console\input\Option as InputOption;
use think\migration\command\seed\Run;

class SeedCommand extends Run
{
    protected function configure(): void
    {
        $this->setName('seed:run2')
            ->setDescription('Run database seeders')
            ->addOption('--seed', '-s', InputOption::VALUE_REQUIRED, 'What is the name of the seeder?')
            ->setHelp(<<<'EOT'
                The <info>seed:run</info> command runs all available or individual seeders

<info>php artisan seed:run</info>
<info>php artisan seed:run -s UserSeeder</info>
<info>php artisan seed:run -v</info>
EOT
            );
    }

    protected function getPath(): string
    {
        return $this->app->getAppPath().'bundle'.DIRECTORY_SEPARATOR.'*'.DIRECTORY_SEPARATOR.'seeders';
    }
}
