<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarSeat */

$this->title = 'Update Bar Seat: ' . $model->bar_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Seats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bar_id, 'url' => ['view', 'id' => $model->bar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-seat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
