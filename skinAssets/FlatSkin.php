<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 25.08.15
 * Time: 16:22
 */

namespace andrew72ru\ionrange\skinAssets;


use yii\web\AssetBundle;

class FlatSkin extends AssetBundle
{
    public $sourcePath = '@bower/ionrangeslider';
    public $css = ['css/ion.rangeSlider.skinFlat.css'];
    public $depends = ['andrew72ru\ionrange\SliderAsset'];
}