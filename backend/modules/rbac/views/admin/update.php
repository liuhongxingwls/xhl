<?php

use yii\helpers\Html;

/*
 * @var yii\web\View $this
 * @var rbac\models\AuthItem $model
 */
$this->title = '修改管理员';
?>
<div class="basic-car-brand-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
