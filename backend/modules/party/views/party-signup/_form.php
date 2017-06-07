<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PartySignup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="party-signup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'party_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'member_count')->textInput() ?>

    <?= $form->field($model, 'real_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sign_time')->textInput() ?>

    <?= $form->field($model, 'should_pay')->textInput() ?>

    <?= $form->field($model, 'pay_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_team_infocol')->textInput(['maxlength' => true]) ?>

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
