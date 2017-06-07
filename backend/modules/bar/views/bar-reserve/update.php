<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarReserve */

$this->title = 'Update Bar Reserve: ' . $model->reserve_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Reserves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reserve_id, 'url' => ['view', 'id' => $model->reserve_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-reserve-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
