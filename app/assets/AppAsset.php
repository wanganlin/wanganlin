<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/default';

    public $baseUrl = '@web/themes/default';

    public $css = [
        'css/app.css?v=' . RELEASE
    ];

    public $js = [
        'js/app.js?v=' . RELEASE
    ];

    public $depends = [
        LayUIAsset::class,
    ];
}
