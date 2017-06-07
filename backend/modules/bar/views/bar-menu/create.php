<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarMenu */

$this->title = 'Create Bar Menu';
$this->params['breadcrumbs'][] = ['label' => 'Bar Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
