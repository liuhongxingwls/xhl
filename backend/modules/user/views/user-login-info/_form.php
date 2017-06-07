<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserLoginInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-login-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'row_id')->textInput() ?>

    <?= $form->field($model, 'access_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_deadline')->textInput() ?>

    <?= $form->field($model, 'refresh_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refresh_deadline')->textInput() ?>

    <?= $form->field($model, 'tbl_user_login_infocol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_user_login_infocol1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'updator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
