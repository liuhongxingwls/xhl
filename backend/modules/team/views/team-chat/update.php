<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TeamChat */

$this->title = 'Update Team Chat: ' . $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->team_id, 'url' => ['view', 'id' => $model->team_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-chat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
