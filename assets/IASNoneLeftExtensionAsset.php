<?php

namespace panix\wgt\scrollpager\assets;

use yii\web\AssetBundle;


/**
 * Class IASNoneLeftExtensionAsset
 * @package panix\wgt\scrollpager\assets
 */
class IASNoneLeftExtensionAsset extends AssetBundle
{

    public $sourcePath = '@vendor/webcreate/jquery-ias/src';

    public $js = [
        'extension/noneleft.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\assets\InfiniteAjaxScrollAsset',
    ];

}
