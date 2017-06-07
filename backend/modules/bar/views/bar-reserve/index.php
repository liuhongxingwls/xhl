<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BarReserveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bar Reserves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-reserve-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bar Reserve', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reserve_id',
            'user_id',
            'bar_id',
            'seat_type',
            'reserve_time',
             'member_count',
             'real_name',
             'phone_number',
             'reserve_state',
             'user_cost',
            // 'tbl_bar_reservecol',
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
