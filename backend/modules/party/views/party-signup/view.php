<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PartySignup */

$this->title = $model->row_id;
$this->params['breadcrumbs'][] = ['label' => 'Party Signups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="party-signup-view">

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
            'party_id',
            'user_id',
            'member_count',
            'real_name',
            'phone_number',
            'sign_time',
            'should_pay',
            'pay_state',
            'pay_mode',
            'tbl_team_infocol',
            'tbl_user_infocol1',
            'create_time',
            'creator',
            'update_time',
            'updator',
            'state',
        ],
    ]) ?>

</div>
