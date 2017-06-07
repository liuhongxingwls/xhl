<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PartyInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="party-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'party_id') ?>

    <?= $form->field($model, 'party_title') ?>

    <?= $form->field($model, 'party_pic') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'join_mode') ?>

    <?php // echo $form->field($model, 'pay_mode') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'praty_bar') ?>

    <?php // echo $form->field($model, 'start_time') ?>

    <?php // echo $form->field($model, 'party_state') ?>

    <?php // echo $form->field($model, 'sign_startline') ?>

    <?php // echo $form->field($model, 'sign_deadline') ?>

    <?php // echo $form->field($model, 'sign_count') ?>

    <?php // echo $form->field($model, 'apply_count') ?>

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
