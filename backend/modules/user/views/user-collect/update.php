<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserCollect */

$this->title = 'Update User Collect: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'User Collects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-collect-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
