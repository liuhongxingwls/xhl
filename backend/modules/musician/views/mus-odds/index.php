<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MusOddsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mus Odds');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mus-odds-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mus Odds'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'row_id',
            'music_type',
            'musician_id',
            'music_name',
            'content',
            // 'path',
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
