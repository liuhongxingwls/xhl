<?php
/**
 * Created by PhpStorm.
 * User: iautos
 * Date: 16/7/15
 * Time: 下午11:00
 */

namespace backend\widgets;

use yii\helpers\ArrayHelper;
use yii\widgets\ActiveField;

class ActiveForm extends \yii\widgets\ActiveForm
{
    public $fieldConfig = [
//        'options' => [
//            'class' => 'active-field',
//            'tag' => 'dl'
//        ],
//        'template' => "<dt>{label}</dt>\n<dd>{input}\n{error}\n{hint}</dd>",
        'errorOptions' => [
            'encode' => false,
            'class' => 'help-block'
        ],
        'inputOptions' => ['class' => 'form-control width-300']
    ];

//    public $options = ['class' => 'active-form'];

    public $validateOnBlur = false;

    public $boxFieldClass = '\backend\widgets\BoxField';

    /**
     * 可折叠
     * @param $model
     * @param $attribute
     * @param array $options
     * @return ActiveField the created ActiveField object
     */
    public function boxField($model, $attribute, $options = [])
    {
        $config = $this->fieldConfig;
        if ($config instanceof \Closure) {
            $config = call_user_func($config, $model, $attribute);
        }
        if (!isset($config['class'])) {
            $config['class'] = $this->boxFieldClass;
        }
        return \Yii::createObject(ArrayHelper::merge($config, $options, [
            'model' => $model,
            'attribute' => $attribute,
            'form' => $this,
        ]));
    }

    /**
     * 有后缀的
     * @param $model
     * @param $attribute
     * @param string $suffix
     * @param string $suffixType
     * @param array $options
     * @return ActiveField the created ActiveField object
     */
    public function suffixField($model, $attribute, $suffix = '', $suffixType = 'addon', $options = [])
    {
        $config = $this->fieldConfig;
        if ($config instanceof \Closure) {
            $config = call_user_func($config, $model, $attribute);
        }
        if (!isset($config['class'])) {
            $config['class'] = $this->fieldClass;
        }
        $size = ArrayHelper::remove($options, 'size', '300');
        $size = !empty($size) ? "input-group-{$size} " : '';
        $inputTemplate = "<div class=\"input-group $size\">{input}\n<div class=\"input-group-" . $suffixType . "\">" . $suffix . "</div></div>";
//        $defaultOptions = ['template' => "<dt>{label}</dt>\n<dd>" . $inputTemplate . "\n{error}\n{hint}</dd>"];
        $defaultOptions = ['template' => "{label}\n" . $inputTemplate . "\n{error}\n{hint}"];
        $options = array_merge($defaultOptions, $options);
        return \Yii::createObject(ArrayHelper::merge($config, $options, [
            'model' => $model,
            'attribute' => $attribute,
            'form' => $this,
        ]));
    }

    /**
     * 有前缀的
     * @param $model
     * @param $attribute
     * @param string $prefix
     * @param string $prefixType
     * @param array $options
     * @return ActiveField the created ActiveField object
     */
    public function prefixField($model, $attribute, $prefix = '', $prefixType = 'addon', $options = [])
    {
        $config = $this->fieldConfig;
        if ($config instanceof \Closure) {
            $config = call_user_func($config, $model, $attribute);
        }
        if (!isset($config['class'])) {
            $config['class'] = $this->fieldClass;
        }
        $size = ArrayHelper::remove($options, 'size', '300');
        $size = !empty($size) ? "input-group-{$size} " : '';
        $inputTemplate = "<div class=\"input - group $size\"><div class=\"input - group - \" . $prefixType . \"\" > \" . $prefix . \"</div>\n{input}</div>";
//        $defaultOptions = ['template' => "<dt>{label}</dt>\n<dd>" . $inputTemplate . "\n{error}\n{hint}</dd>"];
        $defaultOptions = ['template' => "{label}\n" . $inputTemplate . "\n{error}\n{hint}"];
        $options = array_merge($defaultOptions, $options);
        return \Yii::createObject(ArrayHelper::merge($config, $options, [
            'model' => $model,
            'attribute' => $attribute,
            'form' => $this,
        ]));
    }
}