<?php

return [
    // 指令定义
    'commands' => [
        app\foundation\command\gen\GenDictCommand::class,
        app\foundation\command\gen\GenEntityCommand::class,
        app\foundation\command\gen\GenInterfaceCommand::class,
        app\foundation\command\gen\GenModelCommand::class,
        app\foundation\command\gen\GenRepositoryCommand::class,
        app\foundation\command\gen\GenServiceCommand::class,
        app\foundation\command\migrate\MigrateCommand::class,
        app\foundation\command\seed\SeedCommand::class,
    ],
];
