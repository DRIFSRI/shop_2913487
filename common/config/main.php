<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
//        'urlManager'=>[
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];