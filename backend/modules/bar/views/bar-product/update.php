<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarProduct */

$this->title = 'Update Bar Product: ' . $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_id, 'url' => ['view', 'id' => $model->product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
