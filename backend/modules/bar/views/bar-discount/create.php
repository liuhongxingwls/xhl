<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarDiscount */

$this->title = 'Create Bar Discount';
$this->params['breadcrumbs'][] = ['label' => 'Bar Discounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-discount-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
