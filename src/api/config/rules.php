<?php

/**
 * 配置REST URL 信息
 */
return [

    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/default',
        'only' => ['index'],
    ],
];
