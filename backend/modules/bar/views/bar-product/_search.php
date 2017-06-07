<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\BarProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bar-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'menu_id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'product_pic') ?>

    <?= $form->field($model, 'sales_unit') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'show_order') ?>

    <?php // echo $form->field($model, 'product_detail') ?>

    <?php // echo $form->field($model, 'tbl_user_login_infocol') ?>

    <?php // echo $form->field($model, 'tbl_user_login_infocol1') ?>

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
