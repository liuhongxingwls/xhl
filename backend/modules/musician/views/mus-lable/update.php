<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MusLable */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mus Lable',
]) . $model->row_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mus Lables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->row_id, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mus-lable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
