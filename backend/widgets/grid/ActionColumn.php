<?php
namespace backend\widgets\grid;

use Yii;
use Closure;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class ActionColumn extends  \yii\grid\ActionColumn
{
    public $header = '操作';
    public $footer = '操作';
    public $buttonOptions = ["class"=>"btn btn-default btn-xs btn-flat"];
    public $template = '{view} {update} {delete}';


    /**
     * Initializes the default button rendering callbacks.
     */
    protected function initDefaultButtons()
    {
//        parent::initDefaultButtons();
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('<span class="fa fa-eye"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('<span class="fa fa-edit"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('<span class="fa fa-trash"></span>', $url, $options);
            };
        }

        if (!isset($this->buttons['create'])) {
            $this->buttons['create'] = function ($url) {
                $options = ArrayHelper::merge([
                    'title' => Yii::t('yii', 'Create'),
                    'aria-label' => Yii::t('yii', 'Create'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);

                return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['up'])) {
            $this->buttons['up'] = function ($url) {
                $options = ArrayHelper::merge([
                    'title' => Yii::t('yii', 'Up'),
                    'aria-label' => Yii::t('yii', 'Up'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);

                return Html::a('<span class="glyphicon glyphicon-arrow-up"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['down'])) {
            $this->buttons['down'] = function ($url) {
                $options = ArrayHelper::merge([
                    'title' => Yii::t('yii', 'Down'),
                    'aria-label' => Yii::t('yii', 'Down'),
                    'data-pjax' => '0'
                ], $this->buttonOptions);

                return Html::a('<span class="glyphicon glyphicon-arrow-down"></span>', $url, $options);
            };
        }

    }
}
