<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PartyInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="party-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'party_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'party_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'join_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'praty_bar')->textInput() ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'party_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sign_startline')->textInput() ?>

    <?= $form->field($model, 'sign_deadline')->textInput() ?>

    <?= $form->field($model, 'sign_count')->textInput() ?>

    <?= $form->field($model, 'apply_count')->textInput() ?>

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
