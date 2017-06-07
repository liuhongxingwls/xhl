<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\UserInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'user_nick') ?>

    <?= $form->field($model, 'phone_number') ?>

    <?= $form->field($model, 'wechat_openid') ?>

    <?= $form->field($model, 'wechat_sessionkey') ?>

    <?php // echo $form->field($model, 'wechat_unionid') ?>

    <?php // echo $form->field($model, 'real_name_verified') ?>

    <?php // echo $form->field($model, 'real_name') ?>

    <?php // echo $form->field($model, 'idcard_number') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'head_pic') ?>

    <?php // echo $form->field($model, 'last_city') ?>

    <?php // echo $form->field($model, 'password') ?>

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
