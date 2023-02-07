<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class LayUIAsset extends AssetBundle
{
    public $sourcePath = '@npm/layui/dist';

    public $css = [
        'css/layui.css',
    ];

    public $js = [
        'layui.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
