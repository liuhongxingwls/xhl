<?php
    use rbac\components\MenuHelper;
    use yii\helpers\Html;
    use backend\components\LeftNav;

    $menu = MenuHelper::getAssignedMenu(Yii::$app->user->id);
?>

<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="/web/admin/">DCMS（数据中心运营管理系统 ）</a>
            <a href="#" class="x-navigation-control"></a>
        </li>

        <?php 
            foreach ($menu as $key => $value) {
                echo '<li class="xn-title">'.$value['label'].'</li>';
                echo \backend\widgets\Menu::widget(
                    [
                    //    'options' => ['class' => 'xn-openable'],
                        'items' => $value['items'],
                    ]
                );

            }
        ?>
   
    </ul>

    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->