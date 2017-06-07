<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\TeamQuestionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-question-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'question_id') ?>

    <?= $form->field($model, 'question_type') ?>

    <?= $form->field($model, 'question_message') ?>

    <?= $form->field($model, 'question_detail') ?>

    <?= $form->field($model, 'question_generation') ?>

    <?php // echo $form->field($model, 'left_answer') ?>

    <?php // echo $form->field($model, 'right_answer') ?>

    <?php // echo $form->field($model, 'tbl_question_infocol') ?>

    <?php // echo $form->field($model, 'tbl_question_infocol1') ?>

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
