<?php

namespace foundation\packages\demo\api;

use yii;
use yii\base\Module as BaseModule;

/**
 * api module definition class
 * @SuppressWarnings(PHPMD.ShortMethodName)
 */
class Module extends BaseModule
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'foundation\packages\demo\api\controllers';
}
