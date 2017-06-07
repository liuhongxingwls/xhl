<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BarProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bar Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bar Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_id',
            'menu_id',
            'product_name',
            'product_pic',
            'sales_unit',
             'price',
             'show_order',
             'product_detail:ntext',
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
