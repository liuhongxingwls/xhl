<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserBarComment */

$this->title = 'Create User Bar Comment';
$this->params['breadcrumbs'][] = ['label' => 'User Bar Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-bar-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
