<?php

namespace panix\wgt\scrollpager;

use yii\web\AssetBundle;

class InfiniteAjaxScrollAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets/js';
    public $js = [
        'callbacks.js',
        'jquery-ias.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
