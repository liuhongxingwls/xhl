<?php
/**
 * Created by PhpStorm.
 * User: iautos
 * Date: 2017/1/13
 * Time: 下午3:04
 */

namespace backend\widgets;


use kartik\select2\Select2;

class Select2Widget extends Select2
{
    public $width = '250px';

    public $theme = self::THEME_DEFAULT;

    public $placeholder = '';

    public $multiple = false;

    public function init()
    {
        parent::init();
//        if ($this->hasModel()) {
//            $this->placeholder = $this->model->getAttributeLabel($this->attribute);
//        }
        $this->options['placeholder'] = isset($this->options['placeholder']) ? $this->options['placeholder'] : $this->placeholder;
        $this->options['multiple'] = isset($this->options['multiple']) ? $this->options['multiple'] : $this->multiple;
        if (!empty($this->width)) {
            $this->pluginOptions['width'] = $this->width;
        }
    }
}