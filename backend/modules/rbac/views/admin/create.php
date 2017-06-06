<?php

use yii\helpers\Html;

/*
 * @var yii\web\View $this
 * @var rbac\models\AuthItem $model
 */
$this->title = '创建管理员';
?>

<div class="basic-car-brand-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
