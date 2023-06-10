<?php

namespace panix\wgt\scrollpager;

use yii\web\AssetBundle;


/**
 * Class IASTriggerExtensionAsset
 * @package panix\wgt\scrollpager
 */
class IASTriggerExtensionAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets/js';

    public $js = [
        YII_DEBUG ? 'extension/trigger.js' : 'extension/trigger.min.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\InfiniteAjaxScrollAsset',
    ];

}
