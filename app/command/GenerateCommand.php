<?php

declare(strict_types=1);

namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;

class GenerateCommand extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('generate')
            ->setDescription('the generate command');
    }

    protected function execute(Input $input, Output $output)
    {
        // 指令输出
        $output->writeln('generate');
    }
}
