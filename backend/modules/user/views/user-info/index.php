<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'user_nick',
            'phone_number',
            'wechat_openid',
            'wechat_sessionkey',
            // 'wechat_unionid',
            // 'real_name_verified',
            // 'real_name',
            // 'idcard_number',
            // 'sex',
            // 'birthday',
            // 'address',
            // 'head_pic',
            // 'last_city',
            // 'password',
            // 'create_time',
            // 'creator',
            // 'update_time',
            // 'updator',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
