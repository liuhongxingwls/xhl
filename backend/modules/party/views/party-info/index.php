<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PartyInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Party Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="party-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Party Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'party_id',
            'party_title',
            'party_pic',
            'content:ntext',
            'join_mode',
            // 'pay_mode',
            // 'price',
            // 'praty_bar',
            // 'start_time',
            // 'party_state',
            // 'sign_startline',
            // 'sign_deadline',
            // 'sign_count',
            // 'apply_count',
            // 'create_time',
            // 'creator',
            // 'update_time',
            // 'updator',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
