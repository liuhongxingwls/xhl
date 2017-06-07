<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\UserComplantCommentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-complant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'complant_type') ?>

    <?= $form->field($model, 'complant_id') ?>

    <?= $form->field($model, 'content_type') ?>

    <?= $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'tbl_user_collectcol') ?>

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
