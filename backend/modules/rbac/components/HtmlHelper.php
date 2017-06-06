<?php
/**
 * Created by PhpStorm.
 * Author: ljt
 * DateTime: 2016/11/8 15:10
 * Description:
 */

namespace rbac\components;

class HtmlHelper
{
    public static function __callStatic($name, $arguments)
    {
        $permissionName = $arguments[0];
        unset($arguments[0]);
        if (Helper::checkRoute($permissionName)) {
            return call_user_func_array(['yii\helpers\BaseHtml', $name], $arguments);;
        }
    }
}