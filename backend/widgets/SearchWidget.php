<?php
/**
 * Created by PhpStorm.
 * Author: ljt
 * DateTime: 2016/11/25 14:48
 * Description:
 */

namespace backend\widgets;


use yii\base\InvalidParamException;
use yii\bootstrap\Html;
use yii\bootstrap\InputWidget;
use yii\helpers\ArrayHelper;

class SearchWidget extends InputWidget
{
    public $size = '300';

    public $btn = '选择';

    public $targetModal;

    public $jsCallback;

    public $defaultTextOptions = ['disabled' => 'disabled', 'class' => 'form-control'];

    public $textOptions = [];
    public function init()
    {
        $this->textOptions = ArrayHelper::merge($this->defaultTextOptions, $this->textOptions);
    }

    public function run()
    {
        $value = ArrayHelper::remove($this->options, 'value');
        $size = isset($this->size) ? "input-group-{$this->size}" : '';
        if ($this->hasModel()) {
            echo Html::beginTag('div', ['class' => 'input-group ' . $size]);
            echo Html::activeHiddenInput($this->model, $this->attribute, $this->options);
            echo Html::textInput($this->id, $value, $this->textOptions);
            echo Html::beginTag('div', ['class' => 'input-group-btn']);
            echo $this->btn;
            echo Html::endTag('div');
            echo Html::endTag('div');
        }
    }
}