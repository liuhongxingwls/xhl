<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TeamChatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Chats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-chat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Chat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'team_id',
            'content_type',
            'content',
            'tbl_team_infocol',
            'tbl_user_infocol1',
            // 'create_time',
            // 'creator',
            // 'update_time',
            // 'updator',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
