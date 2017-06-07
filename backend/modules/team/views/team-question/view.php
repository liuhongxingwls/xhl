<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TeamQuestion */

$this->title = $model->question_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-question-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->question_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->question_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'question_id',
            'question_type',
            'question_message',
            'question_detail:ntext',
            'question_generation',
            'left_answer',
            'right_answer',
            'tbl_question_infocol',
            'tbl_question_infocol1',
            'create_time',
            'creator',
            'update_time',
            'updator',
            'state',
        ],
    ]) ?>

</div>
