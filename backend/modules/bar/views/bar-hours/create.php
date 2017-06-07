<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarHours */

$this->title = 'Create Bar Hours';
$this->params['breadcrumbs'][] = ['label' => 'Bar Hours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-hours-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
