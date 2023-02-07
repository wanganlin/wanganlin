<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class VueAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue/dist';

    public $js = [
        'vue.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
