<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TeamChat */

$this->title = 'Create Team Chat';
$this->params['breadcrumbs'][] = ['label' => 'Team Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-chat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
