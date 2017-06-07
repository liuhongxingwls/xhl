<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserBarComment */

$this->title = 'Update User Bar Comment: ' . $model->bar_id;
$this->params['breadcrumbs'][] = ['label' => 'User Bar Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bar_id, 'url' => ['view', 'id' => $model->bar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-bar-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
