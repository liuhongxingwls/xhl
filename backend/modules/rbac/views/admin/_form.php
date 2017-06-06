<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/*
 * @var yii\web\View $this
 * @var rbac\models\AuthItem $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<?php $form = ActiveForm::begin([
    'method' => 'post',
    'fieldConfig'=>[
        'template'=>'{label}<div class="col-md-9">{input}{error}</div>',
        'labelOptions' => ['class' => 'col-md-3 control-label'],
    ]
]);?>
    <?=$form->field($model, 'userid',['template'=>'{input}'])->hiddenInput() ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?=$this->title?></h3>
        </div>

        <div class="panel-body form-horizontal">                                                                        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true,'value'=>'']) ?>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'realname')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-sm-12 col-sm-offset-5 m-t-lg">
        <?= Html::submitButton($model->isNewRecord ? '提交' : '修改', ['class' => 'btn btn-primary']) ?>
        <?= Html::button('返回', ['class' => 'btn btn-default','onclick'=>'history.go(-1)']) ?>
    </div>
<?php ActiveForm::end(); ?>