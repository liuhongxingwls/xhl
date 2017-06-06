<?php
use rbac\components\MenuHelper;
use rbac\models\Menu;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $context \yii\web\Controller */

backend\assets\AppAsset::register($this);
$leftMenuItems = [];
if (!isset($this->params['menuGroup'])) {
    $context = $this->context;
    $actionId = $context->action->getUniqueId();
    $route = '/' . $actionId;
    $activeMenu = Menu::findOne(['route' => $route]);
    if ($activeMenu == null) {
        $route = '/' . $context->uniqueId . '/' . $context->defaultAction;
        $activeMenu = Menu::findOne(['route' => $route]);
    }
    if ($activeMenu != null) {
        $groupMenu = MenuHelper::getRootMenu($activeMenu);
        $leftMenuItems = MenuHelper::getAssignedMenu(\Yii::$app->user->id, $groupMenu['id']);
    }
} else {

    $groupMenu = Menu::findOne(['name' => $this->params['menuGroup']]);
    $leftMenuItems = MenuHelper::getAssignedMenu(\Yii::$app->user->id, $groupMenu['id']);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script type="text/javascript">
        var BASE_URL = "<?=Yii::$app->assetManager->getPublishedUrl('@backend/static');?>";
    </script>
    <?php $this->head() ?>
    <?= $this->render(
        'themesetting.php'
    );?>
    <style type="text/css">
        div.required label:after {
            content: " *";
            color: red;
        }
        .table{
            table-layout:fixed;
        }
        .table td{
            word-wrap: break-word;
            　　word-break: break-all;
        }
    </style
</head>
<body>
<?php $this->beginBody() ?>
<div class="page-container">

    <?= $this->render(
        'left.php'
    )
    ?>

    <?= $this->render(
        'content.php',
        ['content' => $content]
    ) ?>

</div>
<?php $this->endBody() ?>
<?php if (isset($this->blocks['js'])): ?>
    <?= $this->blocks['js'] ?>
<?php endif; ?>
</body>
</html>
<?php $this->endPage() ?>


