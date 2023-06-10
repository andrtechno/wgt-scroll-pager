<?php

namespace panix\wgt\scrollpager;

use yii\web\AssetBundle;

class InfiniteAjaxScrollAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets/js';
    public $js = [
        YII_DEBUG ? 'callbacks.js' : 'callbacks.min.js',
        YII_DEBUG ? 'jquery-ias.js' : 'jquery-ias.min.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
