<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/9/9
 * Time: 11:50
 */

namespace huijiewei\rangeslider;

use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class RangeSliderAsset extends AssetBundle
{
    public $sourcePath = '@npm/huijiewei-ion-rangeslider';

    public $js = [
        'js/ion.rangeSlider.min.js',
    ];

    public $css = [
        'css/ion.rangeSlider.min.css',
    ];

    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
    ];
}
