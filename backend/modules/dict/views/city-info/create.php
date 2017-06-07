<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CityInfo */

$this->title = Yii::t('app', 'Create City Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'City Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
