<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarPay */

$this->title = 'Update Bar Pay: ' . $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Pays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_id, 'url' => ['view', 'id' => $model->order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-pay-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
