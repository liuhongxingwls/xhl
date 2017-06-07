<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\TeamInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'team_id') ?>

    <?= $form->field($model, 'team_name') ?>

    <?= $form->field($model, 'start_time') ?>

    <?= $form->field($model, 'bar_type') ?>

    <?= $form->field($model, 'member_count') ?>

    <?php // echo $form->field($model, 'member_limit') ?>

    <?php // echo $form->field($model, 'pay_mode') ?>

    <?php // echo $form->field($model, 'will_cost') ?>

    <?php // echo $form->field($model, 'team_message') ?>

    <?php // echo $form->field($model, 'team_state') ?>

    <?php // echo $form->field($model, 'will_bar') ?>

    <?php // echo $form->field($model, 'member_exist') ?>

    <?php // echo $form->field($model, 'conversation_id') ?>

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
