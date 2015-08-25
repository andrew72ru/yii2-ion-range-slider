<?php

namespace andrew72ru\ionrange;

use andrew72ru\ionrange\skinAssets\FlatSkin;
use andrew72ru\ionrange\skinAssets\Html5Skin;
use andrew72ru\ionrange\skinAssets\ModernSkin;
use andrew72ru\ionrange\skinAssets\NiceSkin;
use andrew72ru\ionrange\skinAssets\SimpleSkin;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\InputWidget;

/**
 * Ion.Slider widget.
 */
class Slider extends InputWidget
{
    public $skin = 'nice';
    public $clientOptions = [];
    public $clientEvents = [];

    public function init()
    {
        $this->options = ArrayHelper::merge(['id' => $this->id], $this->options);

        SliderAsset::register($this->view);
        switch($this->skin)
        {
            case 'flat':
                FlatSkin::register($this->view);
                break;
            case 'HTML5':
                Html5Skin::register($this->view);
                break;
            case 'modern':
                ModernSkin::register($this->view);
                break;
            case 'nice':
                NiceSkin::register($this->view);
                break;
            case 'simple':
                SimpleSkin::register($this->view);
                break;
            default:
                NiceSkin::register($this->view);
                break;
        }

        foreach($this->clientEvents as $eventName => $event)
            $this->clientOptions[$eventName] =  new JsExpression($event);

        $this->view->registerJs("$('#{$this->id}').ionRangeSlider(" . Json::encode($this->clientOptions) . ")", View::POS_END);
    }

    public function run()
    {
        $textInput = Html::textInput(Html::getInputName($this->model, $this->attribute), null, $this->options);
        return Html::tag('div', $textInput, ['class' => 'form-group text-center']);
    }
}
