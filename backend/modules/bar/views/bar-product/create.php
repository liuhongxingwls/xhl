<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarProduct */

$this->title = 'Create Bar Product';
$this->params['breadcrumbs'][] = ['label' => 'Bar Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
