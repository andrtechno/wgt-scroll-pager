<?php

namespace panix\wgt\scrollpager;

use yii\web\AssetBundle;


/**
 * Class IASHistoryExtensionAsset
 * @package panix\wgt\scrollpager
 */
class IASHistoryExtensionAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets/js';

    public $js = [
        YII_DEBUG ? 'extension/history.js' : 'extension/history.min.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\InfiniteAjaxScrollAsset',
    ];

}
