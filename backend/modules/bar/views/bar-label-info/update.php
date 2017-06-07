<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarLabelInfo */

$this->title = 'Update Bar Label Info: ' . $model->label_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Label Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->label_id, 'url' => ['view', 'id' => $model->label_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-label-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
