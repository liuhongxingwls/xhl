<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserLoginInfo */

$this->title = 'Create User Login Info';
$this->params['breadcrumbs'][] = ['label' => 'User Login Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-login-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
