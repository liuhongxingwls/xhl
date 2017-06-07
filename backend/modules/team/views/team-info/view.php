<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TeamInfo */

$this->title = $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->team_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->team_id], [
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
            'team_id',
            'team_name',
            'start_time',
            'bar_type',
            'member_count',
            'member_limit',
            'pay_mode',
            'will_cost',
            'team_message',
            'team_state',
            'will_bar',
            'member_exist',
            'conversation_id',
            'tbl_user_infocol1',
            'create_time',
            'creator',
            'update_time',
            'updator',
            'state',
        ],
    ]) ?>

</div>
