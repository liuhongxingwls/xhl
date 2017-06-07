<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TeamAnswer */

$this->title = 'Create Team Answer';
$this->params['breadcrumbs'][] = ['label' => 'Team Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-answer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
