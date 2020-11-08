<?php

namespace panix\wgt\scrollpager\assets;

use yii\web\AssetBundle;


/**
 * Class IASSpinnerExtensionAsset
 * @package panix\wgt\scrollpager\assets
 */
class IASSpinnerExtensionAsset extends AssetBundle
{

    public $sourcePath = '@vendor/webcreate/jquery-ias/src';

    public $js = [
        'extension/spinner.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\assets\InfiniteAjaxScrollAsset',
    ];

}
