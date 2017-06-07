<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'rbac\models\Admin',
            'enableAutoLogin' => true,
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // 使用数据库管理配置文件
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'modules' => [
        'rbac' => [
            'class' => 'rbac\Module',
        ],
        'bar' => [
            'class' => 'backend\modules\bar\Module',
        ],
        'team' => [
            'class' => 'backend\modules\team\Module',
        ],
        'user' => [
            'class' => 'backend\modules\user\Module',
        ],
        'party' => [
            'class' => 'backend\modules\party\Module',
        ],
        'musician' => [
            'class' => 'backend\modules\musician\Module',
        ],
        'dict' => [
            'class' => 'backend\modules\dict\Module',
        ],
    ],
    'aliases' => [
        '@rbac' => '@backend/modules/rbac',
    ],
    'params' => $params,
];
