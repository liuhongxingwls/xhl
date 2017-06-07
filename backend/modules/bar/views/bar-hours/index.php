<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BarHoursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bar Hours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-hours-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bar Hours', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'row_id',
            'bar_id',
            'open_time',
            'close_time',
            'excute_day',
             'tbl_user_login_infocol',
             'tbl_user_login_infocol1',
             'create_time',
             'creator',
             'update_time',
             'updator',
             'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
