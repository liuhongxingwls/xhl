<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BarInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bar Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bar Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bar_id',
            'bar_name',
            'bar_city',
            'bar_address',
            'bar_phonenumber',
             'bar_location',
             'bar_detail:ntext',
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
