<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\MusicianInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="musician-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'musician_id') ?>

    <?= $form->field($model, 'musician_type') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'musician_pic') ?>

    <?= $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'tbl_musician_infocol') ?>

    <?php // echo $form->field($model, 'tbl_user_infocol1') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'updator') ?>

    <?php // echo $form->field($model, 'state') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
