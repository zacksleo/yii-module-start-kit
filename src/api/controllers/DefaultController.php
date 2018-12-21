<?php
namespace foundation\packages\coupon\api\controllers;

use yii;
use yii\rest\Controller;

class DefaultController extends Controller
{
    /**
     * 接口列表
     * @return array
     */
    public function actionIndex()
    {
        $rules = require(dirname(__FILE__) . './../config/rules.php');
        $items = null;
        foreach ($rules as $rule) {
            $explodeArray = explode('/', $rule['controller']);
            $title = ucwords(str_replace('-', ' ', end($explodeArray)));
            $items[Yii::t('app', $title)] = '/' . $rule['controller'] . 's';
        }
        return $items;
    }
}
