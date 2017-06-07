<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarLabel */

$this->title = 'Update Bar Label: ' . $model->row_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Labels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->row_id, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-label-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
