<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PartyInfo */

$this->title = $model->party_id;
$this->params['breadcrumbs'][] = ['label' => 'Party Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="party-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->party_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->party_id], [
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
            'party_id',
            'party_title',
            'party_pic',
            'content:ntext',
            'join_mode',
            'pay_mode',
            'price',
            'praty_bar',
            'start_time',
            'party_state',
            'sign_startline',
            'sign_deadline',
            'sign_count',
            'apply_count',
            'create_time',
            'creator',
            'update_time',
            'updator',
            'state',
        ],
    ]) ?>

</div>
