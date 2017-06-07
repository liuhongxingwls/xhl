<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarMenu */

$this->title = 'Update Bar Menu: ' . $model->menu_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->menu_id, 'url' => ['view', 'id' => $model->menu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bar-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
