<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'zh-CN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            //    'forceCopy' => true,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => '@backend/static',
                    'js' => [
                        //'js/plugins/jquery/jquery-3.1.1.min.js',
                        'js/plugins/jquery/jquery-2.2.3.js',
                    ]
                ],
            ],
        ],
    ],
];
