<?php

namespace panix\wgt\scrollpager\assets;

use yii\web\AssetBundle;

class InfiniteAjaxScrollAsset extends AssetBundle
{

    public $sourcePath = '@vendor/webcreate/jquery-ias/src';

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
