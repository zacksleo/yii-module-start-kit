<?php
return [
    'request' => [
        'baseUrl' => '/api',
        'parsers' => [
            'application/json' => 'yii\web\JsonParser',
        ]
    ],
    'response' => [
        'format' => \yii\web\Response::FORMAT_JSON
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'user' => [
        'class' => 'yii\web\User',
        'identityClass' => 'common\models\App',
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'enableStrictParsing' => false,
        'rules' => require(dirname(dirname(dirname(dirname(__DIR__)))) . '/src/api/config/rules.php'),
    ],
    'assetManager' => [
        'basePath' => __DIR__ . '/../web/assets',
    ],
];
