<?php

namespace panix\wgt\scrollpager;

use yii\web\AssetBundle;


/**
 * Class IASNoneLeftExtensionAsset
 * @package panix\wgt\scrollpager
 */
class IASNoneLeftExtensionAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets/js';

    public $js = [
        YII_DEBUG ? 'extension/noneleft.js' : 'extension/noneleft.min.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\InfiniteAjaxScrollAsset',
    ];

}
