<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TeamQuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-question-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Question', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'question_id',
            'question_type',
            'question_message',
            'question_detail:ntext',
            'question_generation',
            // 'left_answer',
            // 'right_answer',
            // 'tbl_question_infocol',
            // 'tbl_question_infocol1',
            // 'create_time',
            // 'creator',
            // 'update_time',
            // 'updator',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
