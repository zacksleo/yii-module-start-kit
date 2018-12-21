<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('@foundation/packages/demo', dirname(dirname(dirname(dirname(__DIR__)))) . '/src');
(new \Dotenv\Dotenv(dirname(dirname(dirname(__DIR__)))))->load();