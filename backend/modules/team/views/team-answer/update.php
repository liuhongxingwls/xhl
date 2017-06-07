<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TeamAnswer */

$this->title = 'Update Team Answer: ' . $model->question_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->question_id, 'url' => ['view', 'id' => $model->question_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-answer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
