<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\search\ServiceTicketLoanSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin([
        'action' => ['admin/index'],
        'method' => 'get',
        'class'=>'form-horizontal',
        'fieldConfig'=>[
            'template'=>'{input}',
        ]
        ]); ?>
    <div class="panel-body">  
        <div class="panel-body tab-content">
            <div class="col-md-2">
                <?= $form->field($model, 'username')->textInput(['placeholder'=>$model->attributeLabels()['username']]);?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'realname')->textInput(['placeholder'=>$model->attributeLabels()['realname']]);?>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <?= Html::submitButton('搜索', ['class' => 'btn btn-primary btn-flat']) ?>
                    
                </div>
            </div>
        </div>
    </div>    
<?php ActiveForm::end(); ?>
