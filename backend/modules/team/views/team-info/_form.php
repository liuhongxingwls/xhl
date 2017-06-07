<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'team_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'bar_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_count')->textInput() ?>

    <?= $form->field($model, 'member_limit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'will_cost')->textInput() ?>

    <?= $form->field($model, 'team_message')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'will_bar')->textInput() ?>

    <?= $form->field($model, 'member_exist')->textInput() ?>

    <?= $form->field($model, 'conversation_id')->textInput(['maxlength' => true]) ?>

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
