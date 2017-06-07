<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarSeat */

$this->title = 'Create Bar Seat';
$this->params['breadcrumbs'][] = ['label' => 'Bar Seats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-seat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
