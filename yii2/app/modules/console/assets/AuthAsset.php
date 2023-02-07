<?php

namespace app\modules\console\assets;

use app\assets\LayUIAsset;
use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot/static';

    public $baseUrl = '@web/static';

    public $css = [
        'admin/css/app.css?v=' . RELEASE,
    ];

    public $depends = [
        LayUIAsset::class,
    ];
}
