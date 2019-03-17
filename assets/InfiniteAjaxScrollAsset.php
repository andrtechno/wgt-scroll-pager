<?php

namespace panix\wgt\scrollpager\assets;

use yii\web\AssetBundle;

class InfiniteAjaxScrollAsset extends AssetBundle
{
    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = '@vendor/webcreate/jquery-ias/src';
        $this->js = [
            'callbacks.js',
            'jquery-ias.js',
            'extension/history.js',
            'extension/noneleft.js',
            'extension/paging.js',
            'extension/spinner.js',
            'extension/trigger.js'
        ];
    }
}
