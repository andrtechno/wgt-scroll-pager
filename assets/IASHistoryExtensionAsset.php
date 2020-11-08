<?php

namespace panix\wgt\scrollpager\assets;

use yii\web\AssetBundle;


/**
 * Class IASHistoryExtensionAsset
 * @package panix\wgt\scrollpager\assets
 */
class IASHistoryExtensionAsset extends AssetBundle
{

    public $sourcePath = '@vendor/webcreate/jquery-ias/src';

    public $js = [
        'extension/history.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\assets\InfiniteAjaxScrollAsset',
    ];

}
