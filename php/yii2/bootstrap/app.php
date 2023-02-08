<?php

if (version_compare(PHP_VERSION, '8.1', '<')) {
    die('require PHP > 8.1 !');
}

/*
|--------------------------------------------------------------------------
| Version Setting
|--------------------------------------------------------------------------
|
*/

const APP_NAME = 'YiiCMS';
const VERSION = '1.0.0-dev';
const RELEASE = '20221115';

/*
|--------------------------------------------------------------------------
| Debug Setting
|--------------------------------------------------------------------------
|
*/

if (in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
} else {
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_ENV') or define('YII_ENV', 'prod');
}

/*
|--------------------------------------------------------------------------
| Kernel Loading
|--------------------------------------------------------------------------
|
*/

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

/*
|--------------------------------------------------------------------------
| Loading Alias
|--------------------------------------------------------------------------
|
*/

require __DIR__ . '/../config/alias.php';

/*
|--------------------------------------------------------------------------
| Loading Configuration
|--------------------------------------------------------------------------
|
*/

$config = require __DIR__ . '/../config/web.php';

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return new yii\web\Application($config);
