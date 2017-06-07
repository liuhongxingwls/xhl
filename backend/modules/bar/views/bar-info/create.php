<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarInfo */

$this->title = 'Create Bar Info';
$this->params['breadcrumbs'][] = ['label' => 'Bar Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
