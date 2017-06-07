<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BarProduct */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Bar Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bar-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_id], [
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
            'product_id',
            'menu_id',
            'product_name',
            'product_pic',
            'sales_unit',
            'price',
            'show_order',
            'product_detail:ntext',
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
