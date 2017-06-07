<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BarSeatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bar Seats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-seat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bar Seat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bar_id',
            'seat_type',
            'accept_reserve',
            'seat_detail',
            'is_noseat',
             'seat_pic',
            // 'tbl_user_login_infocol',
            // 'tbl_user_login_infocol1',
             'create_time',
             'creator',
             'update_time',
             'updator',
             'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
