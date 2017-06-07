<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MusicianInfo */

$this->title = Yii::t('app', 'Create Musician Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Musician Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="musician-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
