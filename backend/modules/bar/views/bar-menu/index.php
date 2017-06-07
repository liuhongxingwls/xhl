<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BarMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bar Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bar Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'menu_id',
            'bar_id',
            'menu_name',
            'show_order',
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
