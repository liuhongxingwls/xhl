<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamQuestion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'question_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_message')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'question_generation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'left_answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right_answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_question_infocol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_question_infocol1')->textInput(['maxlength' => true]) ?>

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
