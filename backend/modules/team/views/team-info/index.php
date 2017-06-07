<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TeamInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'team_id',
            'team_name',
            'start_time',
            'bar_type',
            'member_count',
            // 'member_limit',
            // 'pay_mode',
            // 'will_cost',
            // 'team_message',
            // 'team_state',
            // 'will_bar',
            // 'member_exist',
            // 'conversation_id',
            // 'tbl_user_infocol1',
            // 'create_time',
            // 'creator',
            // 'update_time',
            // 'updator',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
