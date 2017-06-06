<?php
    use yii\widgets\Breadcrumbs;
    use yii\helpers\Html;
?>
<div class="page-content">
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- TOGGLE NAVIGATION -->
        <li class="xn-icon-button">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>
        <!-- END TOGGLE NAVIGATION -->

        <li class="xn-icon-button">
            <a href="/web/admin/"><i class="fa  fa-home"></i></a>
        </li>

        <!-- SIGN OUT -->
        <li class="xn-icon-button pull-right">
            <?= Html::a('<i class="fa  fa-sign-out"></i>', ['/site/logout'], ['data-method' => 'post']) ?>
        </li>
        <li class="xn-icon-button pull-right">
            <div class="profile">
                <div class="profile-data">
                    <div class="profile-data-name">欢迎您：<?php echo YII::$app->user->identity->username;?></div>
                </div>
            </div>                                                                        
        </li>
        <!-- END SIGN OUT -->
    </ul>

    <?= $content ?>
</div>

<footer class="main-footer">
    <?= Yii::powered()?>
</footer>