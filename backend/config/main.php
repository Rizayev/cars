<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'rbac' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/main.php',
        ],
        'controllerMap' => [
            'assignment' => [
                'class' => 'mdm\admin\controllers\AssignmentController',
//                'userClassName' => 'app\models\User',
                'idField' => 'id',
                'usernameField' => 'username',
            ],
        ],
    ],
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
            'defaultRoles' => ['User'],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/admin',
        ],
        'user' => [
//            'identityClass' => 'common\models\User',
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
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

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'suffix' => '.html',
            'rules' => [
                '' => 'site/index',
                '<action>' => 'site/<action>',
            ],
        ],
        'assetManager' => [
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets'
        ]

    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
        ]
    ],
    'params' => $params,
];
