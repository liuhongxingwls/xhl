<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TeamInfo */

$this->title = 'Update Team Info: ' . $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->team_id, 'url' => ['view', 'id' => $model->team_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
