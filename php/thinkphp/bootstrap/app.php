<?php

declare(strict_types=1);

$app = new think\App;
$app->env->set([
    'APP_NAME' => 'PHPCMS',
    'VERSION' => 'v1.0.0',
    'RELEASE' => '20251202',
]);

return $app;
