<?php

namespace panix\wgt\scrollpager;

use yii\web\AssetBundle;


/**
 * Class IASSpinnerExtensionAsset
 * @package panix\wgt\scrollpager
 */
class IASSpinnerExtensionAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets/js';

    public $js = [
        YII_DEBUG ? 'extension/spinner.js' : 'extension/spinner.min.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\InfiniteAjaxScrollAsset',
    ];

}
