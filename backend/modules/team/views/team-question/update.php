<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TeamQuestion */

$this->title = 'Update Team Question: ' . $model->question_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->question_id, 'url' => ['view', 'id' => $model->question_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-question-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
