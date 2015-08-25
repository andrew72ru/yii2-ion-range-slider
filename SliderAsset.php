<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 25.08.15
 * Time: 15:12
 */

namespace andrew72ru\ionrange;

use Yii;
use yii\web\AssetBundle;

class SliderAsset extends AssetBundle
{
    public $sourcePath = '@bower/ionrangeslider';
    public $js = ['js/ion.rangeSlider.min.js'];
    public $css = [
        'css/ion.rangeSlider.css',
    ];
    public $depends = ['yii\web\JqueryAsset'];
}