<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TeamAnswerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Answers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-answer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Answer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'question_id',
            'user_id',
            'answer',
            'tbl_user_login_infocol',
            'tbl_user_login_infocol1',
            // 'creator',
            // 'create_time',
            // 'updator',
            // 'update_time',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
