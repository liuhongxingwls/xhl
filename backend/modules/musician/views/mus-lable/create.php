<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MusLable */

$this->title = Yii::t('app', 'Create Mus Lable');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mus Lables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mus-lable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
