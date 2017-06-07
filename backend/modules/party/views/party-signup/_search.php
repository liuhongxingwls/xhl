<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PartySignupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="party-signup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'row_id') ?>

    <?= $form->field($model, 'party_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'member_count') ?>

    <?= $form->field($model, 'real_name') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'sign_time') ?>

    <?php // echo $form->field($model, 'should_pay') ?>

    <?php // echo $form->field($model, 'pay_state') ?>

    <?php // echo $form->field($model, 'pay_mode') ?>

    <?php // echo $form->field($model, 'tbl_team_infocol') ?>

    <?php // echo $form->field($model, 'tbl_user_infocol1') ?>

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
