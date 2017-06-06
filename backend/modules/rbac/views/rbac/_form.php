<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<?php $form = ActiveForm::begin([
    'method' => 'post',
    'options'=>['class' => 'pingyinfrom'],
    'fieldConfig'=>[
        'template'=>'{label}<div class="col-md-9">{input}{error}</div>',
        'labelOptions' => ['class' => 'col-md-3 control-label'],
    ]
]); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?=$this->title?></h3>
        </div>

        <div class="panel-body form-horizontal">                                                                        
            <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <?=$form->field($model, 'type')->dropDownList(['1'=>'角色','2'=>'权限']);  ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'name')->textInput() ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'description')->textInput() ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'data')->textInput() ?>
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