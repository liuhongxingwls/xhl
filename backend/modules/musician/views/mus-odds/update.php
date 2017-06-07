<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MusOdds */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mus Odds',
]) . $model->row_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mus Odds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->row_id, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mus-odds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
