<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BarReserve */

$this->title = $model->reserve_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Reserves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-reserve-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->reserve_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->reserve_id], [
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
            'reserve_id',
            'user_id',
            'bar_id',
            'seat_type',
            'reserve_time',
            'member_count',
            'real_name',
            'phone_number',
            'reserve_state',
            'user_cost',
            'tbl_bar_reservecol',
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
