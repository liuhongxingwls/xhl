<?php
/**
 * Created by PhpStorm.
 * User: iautos
 * Date: 16/9/22
 * Time: 上午9:16
 */

namespace backend\widgets;


use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;

class AjaxSelect extends Select2Widget
{

    public $pluginOptions =  [
        'allowClear' => true,
    ];

    public $ajaxUrl = [];

    public function init()
    {
        parent::init();
        $resultsJs = <<< JS
function (data, params) {
    params.page = params.page || 1;
    return {
        results: data.items,
        pagination: {
            more: params.page < data.totalPages
        }
    };
}
JS;
        $this->pluginOptions['ajax'] = [
            'url' => Url::to($this->ajaxUrl),
            'delay' => 500,
            'minimumInputLength' => 2,
            'dataType' => 'json',
            'data' => new JsExpression('function(params) { return {q:params.term, page: params.page}; }'),
            'processResults' => new JsExpression($resultsJs),
            'cache' => true
        ];
    }
}