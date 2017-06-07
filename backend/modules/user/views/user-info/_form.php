<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_nick')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wechat_openid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wechat_sessionkey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wechat_unionid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'real_name_verified')->textInput() ?>

    <?= $form->field($model, 'real_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcard_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

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
