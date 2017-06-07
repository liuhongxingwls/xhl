<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MusOdds */

$this->title = Yii::t('app', 'Create Mus Odds');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mus Odds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mus-odds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
