<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BarDiscount */

$this->title = $model->row_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Discounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-discount-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->row_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->row_id], [
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
            'row_id',
            'bar_id',
            'dis_date',
            'original_discount',
            'online_disocunt',
            'offline_discount',
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
