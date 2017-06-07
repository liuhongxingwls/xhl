<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserLoginInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Login Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-login-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Login Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'row_id',
            'access_token',
            'access_deadline',
            'refresh_token',
            'refresh_deadline',
            // 'tbl_user_login_infocol',
            // 'tbl_user_login_infocol1',
            // 'create_time',
            // 'creator',
            // 'update_time',
            // 'updator',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
