<?php

use think\facade\Env;

$app = new think\App();

Env::set('APP_NAME', 'thinkmall');
Env::set('RELEASE', '20250608');
Env::set('VERSION', 'v0.0.1');

return $app;
