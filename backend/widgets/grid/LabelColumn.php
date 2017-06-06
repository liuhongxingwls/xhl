<?php
/**
 * Created by PhpStorm.
 * Author: ljt
 * DateTime: 2016/11/30 14:59
 * Description:
 */

namespace backend\widgets\grid;


use yii\grid\DataColumn;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class LabelColumn extends DataColumn
{
    public $defaultLabel = 'default';

    public $enum = [];

    public $labelEnum = [];
    /**
     * @inheritdoc
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        $params = is_array($key) ? $key : ['id' => (string) $key];
        $params["attribute"] = $this->attribute;

        $value = $this->getDataCellValue($model, $key, $index) ;

        if(is_string($value)) {
            $result =  $value;
        } else {
            $labelClass = ArrayHelper::getValue($this->labelEnum, $value, $this->defaultLabel);
            $value = ArrayHelper::getValue($this->enum, $value);
            $result = Html::tag('span', $value, ['class' => 'label label-' . $labelClass]);
        }
        return $result;
    }
}