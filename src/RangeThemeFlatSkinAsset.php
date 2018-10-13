<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/10/9
 * Time: 11:24
 */

namespace huijiewei\rangeslider;

use yii\web\AssetBundle;

class RangeThemeFlatSkinAsset extends AssetBundle
{
    public $sourcePath = '@npm/huijiewei-ion-rangeslider';

    public $css = [
        'css/ion.rangeSlider.skinFlat.css',
    ];

    public $depends = [
        RangeSliderAsset::class,
    ];
}
