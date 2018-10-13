<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/9/9
 * Time: 11:53
 */

namespace huijiewei\rangeslider;

use yii\bootstrap\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

class RangeSliderWidget extends InputWidget
{
    public $clientOptions = [];

    public $theme = 'Modern';

    public function init()
    {
        parent::init();

        if ($this->theme == 'Flat') {
            RangeThemeFlatSkinAsset::register($this->getView());
        } else {
            RangeThemeModernSkinAsset::register($this->getView());
        }

        $clientOptions = Json::encode($this->clientOptions);

        $js = <<<EOD
$('#{$this->options['id']}').ionRangeSlider({$clientOptions});
EOD;

        $this->getView()->registerJs($js);
    }

    public function run()
    {
        $html = '<div class="ion-range-slider">';

        if ($this->hasModel()) {
            $html .= Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            $html .= Html::textInput($this->name, $this->value, $this->options);
        }

        $html .= '</div>';

        return $html;
    }
}
