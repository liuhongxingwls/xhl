<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserBarComment */

$this->title = $model->bar_id;
$this->params['breadcrumbs'][] = ['label' => 'User Bar Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-bar-comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bar_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bar_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bar_id',
            'user_id',
            'user_score',
            'comment_message',
            'tbl_user_login_infocol',
            'tbl_user_login_infocol1',
            'create_time',
            'creator',
            'update_time',
            'updator',
            'state',
        ],
    ]) ?>

</div>
