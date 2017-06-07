<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PartyInfo */

$this->title = 'Create Party Info';
$this->params['breadcrumbs'][] = ['label' => 'Party Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="party-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
