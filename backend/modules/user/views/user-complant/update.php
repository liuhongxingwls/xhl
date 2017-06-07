<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserComplant */

$this->title = 'Update User Complant: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'User Complants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-complant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
