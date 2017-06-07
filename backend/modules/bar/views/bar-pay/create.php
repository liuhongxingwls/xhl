<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarPay */

$this->title = 'Create Bar Pay';
$this->params['breadcrumbs'][] = ['label' => 'Bar Pays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-pay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
