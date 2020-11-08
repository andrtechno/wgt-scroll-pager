<?php

namespace panix\wgt\scrollpager\assets;

use yii\web\AssetBundle;


/**
 * Class IASPagingExtensionAsset
 * @package panix\wgt\scrollpager\assets
 */
class IASPagingExtensionAsset extends AssetBundle
{

    public $sourcePath = '@vendor/webcreate/jquery-ias/src';

    public $js = [
        'extension/paging.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\assets\InfiniteAjaxScrollAsset',
    ];

}
