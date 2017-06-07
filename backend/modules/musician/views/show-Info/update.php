<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ShowInfo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Show Info',
]) . $model->row_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Show Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->row_id, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="show-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
