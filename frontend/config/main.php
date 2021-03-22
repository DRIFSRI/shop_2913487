<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

//echo '=<pre>', var_dump(1111), "</pre>=\n<br>";


return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'db'=>[
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=shop_2913487',
            'username' => 'mysql',
            'password' => 'mysql',
            'charset' => 'utf8',
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
//        'homeUrl' => '/',
        'urlManager' => [
            // указали используемый класс
            'class' => 'yii\web\UrlManager',
            // что хотим делать с классом, параметры
            // ЧПУ
            'enablePrettyUrl' => true,
            //скрывать index.php
            'showScriptName' => false,
            'rules' => [
//                '<controller:(catalog)>/<id:\d+>/<action:(create|update|delete|search)>' => '<controller>/<action>',
                '<controller:(catalog)>/<id:\d+>' => '<controller>/search',
            ],
        ],

    ],
    'params' => $params,
];
