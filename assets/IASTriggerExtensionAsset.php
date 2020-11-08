<?php

namespace panix\wgt\scrollpager\assets;

use yii\web\AssetBundle;


/**
 * Class IASTriggerExtensionAsset
 * @package panix\wgt\scrollpager\assets
 */
class IASTriggerExtensionAsset extends AssetBundle
{

    public $sourcePath = '@vendor/webcreate/jquery-ias/src';

    public $js = [
        'extension/trigger.js'
    ];

    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'panix\wgt\scrollpager\assets\InfiniteAjaxScrollAsset',
    ];

}
