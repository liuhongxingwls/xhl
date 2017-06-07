<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MusicianInfo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Musician Info',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Musician Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->musician_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="musician-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
