<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserCollect */

$this->title = 'Create User Collect';
$this->params['breadcrumbs'][] = ['label' => 'User Collects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-collect-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
