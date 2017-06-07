<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CityInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ad_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'updator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
