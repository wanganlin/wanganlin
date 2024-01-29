<?php

use think\facade\Env;

$app = new think\App();

Env::set('RELEASE', '20240126');
Env::set('VERSION', 'v1.0.0');

return $app;
