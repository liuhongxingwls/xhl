<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\BarReserveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bar-reserve-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reserve_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'bar_id') ?>

    <?= $form->field($model, 'seat_type') ?>

    <?= $form->field($model, 'reserve_time') ?>

    <?php // echo $form->field($model, 'member_count') ?>

    <?php // echo $form->field($model, 'real_name') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'reserve_state') ?>

    <?php // echo $form->field($model, 'user_cost') ?>

    <?php // echo $form->field($model, 'tbl_bar_reservecol') ?>

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
