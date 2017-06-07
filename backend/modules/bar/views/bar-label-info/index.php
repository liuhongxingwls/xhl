<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BarLabelInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bar Label Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-label-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bar Label Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'label_id',
            'label_tpye',
            'label_name',
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
