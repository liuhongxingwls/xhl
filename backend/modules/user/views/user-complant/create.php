<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserComplant */

$this->title = 'Create User Complant';
$this->params['breadcrumbs'][] = ['label' => 'User Complants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-complant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
