<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarLabelInfo */

$this->title = 'Create Bar Label Info';
$this->params['breadcrumbs'][] = ['label' => 'Bar Label Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-label-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
