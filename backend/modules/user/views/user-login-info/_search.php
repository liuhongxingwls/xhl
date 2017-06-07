<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\UserLoginInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-login-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'row_id') ?>

    <?= $form->field($model, 'access_token') ?>

    <?= $form->field($model, 'access_deadline') ?>

    <?= $form->field($model, 'refresh_token') ?>

    <?= $form->field($model, 'refresh_deadline') ?>

    <?php // echo $form->field($model, 'tbl_user_login_infocol') ?>

    <?php // echo $form->field($model, 'tbl_user_login_infocol1') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'updator') ?>

    <?php // echo $form->field($model, 'state') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
