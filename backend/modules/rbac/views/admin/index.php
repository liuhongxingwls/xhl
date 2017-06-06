<?php

use yii\helpers\Html;
use yii\grid\GridView;

/*
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var rbac\models\AuthItemSearch $searchModel
 */
$this->params['breadcrumbs'][] = $this->title;
$this->title = '管理员列表';
?>
<div class="page-content-wrap">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <strong>管理员列表</strong>
                <?=Html::a('增加',['create'], ['class' => 'btn btn-info btn-primary'])?>
            </h3>
        </div>
        <?= $this->render('_search', ['model' => $searchModel]); ?>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'pager'=>['options' => ['class'=>'pagination pull-right']],
            'columns' => [
                'userid',
                'username',
                'realname',
                'email:email',
                'lastloginip',

                ['class' => 'yii\grid\ActionColumn', 'header' => '操作', 'headerOptions' => ['width' => '120'],
                    'template' => "{update}",
                ],
            ],
        ]); ?>  
    </div>
</div>
