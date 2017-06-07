<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PartyInfo */

$this->title = 'Update Party Info: ' . $model->party_id;
$this->params['breadcrumbs'][] = ['label' => 'Party Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->party_id, 'url' => ['view', 'id' => $model->party_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="party-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
