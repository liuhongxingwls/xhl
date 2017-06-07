<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserLoginInfo */

$this->title = 'Update User Login Info: ' . $model->row_id;
$this->params['breadcrumbs'][] = ['label' => 'User Login Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->row_id, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-login-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
