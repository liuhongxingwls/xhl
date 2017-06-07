<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\BarPaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bar-pay-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'reserve_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'bar_id') ?>

    <?= $form->field($model, 'pay_mode') ?>

    <?php // echo $form->field($model, 'original_price') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'real_price') ?>

    <?php // echo $form->field($model, 'pay_state') ?>

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
