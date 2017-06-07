<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarReserve */

$this->title = 'Create Bar Reserve';
$this->params['breadcrumbs'][] = ['label' => 'Bar Reserves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-reserve-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
