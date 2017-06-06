<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

backend\assets\AppAsset::register(Yii::$app->view);
$this->title = 'DCMS（数据中心运营管理系统）登录';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="body-full-height">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="login-container">
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body form-horizontal">
            <div class="login-title"><strong>欢迎您</strong>，请登录</div>
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => true, 'class' => 'form-horizontal']); ?>
            <div class="form-group">
                <div class="col-md-12">
                    <input id="loginform-username" value="<?php echo isset($model->username) ? $model->username : '';?>" class="form-control" type="text" autofocus="" name="LoginForm[username]" placeholder="用户名" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input id="loginform-password" value="<?php echo isset($model->password) ? $model->password : '';?>" placeholder="密码" class="form-control" type="password" name="LoginForm[password]" required="">
                </div>
                <div class="col-md-12 has-error">
                    <?=isset($model->errors['password'])?'<p class="help-block help-block-error">'.$model->errors['password'][0].'</p>':''?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <input id="loginform-verifyCode" value="" placeholder="验证码" class="form-control" type="text" name="LoginForm[verifyCode]" required="">
                </div>
                <div class="col-md-6">
                    <?php echo Captcha::widget(['name'=>'captchaimg','captchaAction'=>'site/captcha','imageOptions'=>['id'=>'captchaimg', 'title'=>'换一个', 'alt'=>'换一个', 'style'=>'cursor:pointer;margin-left:25px;'],'template'=>'{image}']);?>
                </div>
                <div class="col-md-12 has-error">
                    <?=isset($model->errors['verifyCode'])?'<p class="help-block help-block-error">'.$model->errors['verifyCode'][0].'</p>':''?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <span class="btn btn-link btn-block">
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </span>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info btn-block">登录</button>
                </div>
            </div>
            <?php ActiveForm::end();?>
        </div>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
