<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamMember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'team_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'team_leader')->textInput() ?>

    <?= $form->field($model, 'apply_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apply_message')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_user_infocol1')->textInput(['maxlength' => true]) ?>

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
