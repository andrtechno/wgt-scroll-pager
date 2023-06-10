<?php

namespace panix\wgt\scrollpager;

use yii\web\AssetBundle;


/**
 * Class IASPagingExtensionAsset
 * @package panix\wgt\scrollpager
 */
class IASPagingExtensionAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets/js';

    public $js = [
        YII_DEBUG ? 'extension/paging.js' : 'extension/paging.min.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\InfiniteAjaxScrollAsset',
    ];

}
