<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SysCode */

$this->title = Yii::t('app', 'Create Sys Code');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sys Codes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sys-code-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
