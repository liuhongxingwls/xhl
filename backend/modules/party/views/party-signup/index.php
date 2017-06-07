<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PartySignupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Party Signups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="party-signup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Party Signup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'row_id',
            'party_id',
            'user_id',
            'member_count',
            'real_name',
            // 'phone_number',
            // 'sign_time',
            // 'should_pay',
            // 'pay_state',
            // 'pay_mode',
            // 'tbl_team_infocol',
            // 'tbl_user_infocol1',
            // 'create_time',
            // 'creator',
            // 'update_time',
            // 'updator',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
