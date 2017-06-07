<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PartySignup */

$this->title = 'Update Party Signup: ' . $model->row_id;
$this->params['breadcrumbs'][] = ['label' => 'Party Signups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->row_id, 'url' => ['view', 'id' => $model->row_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="party-signup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
