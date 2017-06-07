<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarHours */

$this->title = 'Update Bar Hours: ' . $model->row_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Hours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->row_id, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-hours-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
