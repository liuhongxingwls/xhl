<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SysCode */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sys Code',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sys Codes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sys-code-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
