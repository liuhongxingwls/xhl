<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PartySignup */

$this->title = 'Create Party Signup';
$this->params['breadcrumbs'][] = ['label' => 'Party Signups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="party-signup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
