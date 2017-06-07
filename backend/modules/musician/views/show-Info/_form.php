<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ShowInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="show-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'musician_id')->textInput() ?>

    <?= $form->field($model, 'bar_id')->textInput() ?>

    <?= $form->field($model, 'show_date')->textInput() ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'tbl_user_login_infocol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_user_login_infocol1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'updator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
