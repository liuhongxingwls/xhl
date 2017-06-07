<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TeamAnswer */

$this->title = $model->question_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-answer-view">

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
            'user_id',
            'answer',
            'tbl_user_login_infocol',
            'tbl_user_login_infocol1',
            'creator',
            'create_time',
            'updator',
            'update_time',
            'state',
        ],
    ]) ?>

</div>
