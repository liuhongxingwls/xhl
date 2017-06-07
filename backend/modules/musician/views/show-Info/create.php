<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ShowInfo */

$this->title = Yii::t('app', 'Create Show Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Show Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
