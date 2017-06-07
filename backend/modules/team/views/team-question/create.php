<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TeamQuestion */

$this->title = 'Create Team Question';
$this->params['breadcrumbs'][] = ['label' => 'Team Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-question-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
