<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarInfo */

$this->title = 'Update Bar Info: ' . $model->bar_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bar_id, 'url' => ['view', 'id' => $model->bar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
