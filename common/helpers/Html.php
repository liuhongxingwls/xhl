<?php
/**
 * Created by PhpStorm.
 * User: iautos
 * Date: 16/4/1
 * Time: 下午6:28
 */

namespace yii\helpers;

class Html extends BaseHtml
{
    public static function icon($name, $options = [])
    {
//        'glyphicon'
        $tag = ArrayHelper::remove($options, 'tag', 'span');
        $classPrefix = ArrayHelper::remove($options, 'prefix', 'fa fa-');
        static::addCssClass($options, $classPrefix . $name);
        return static::tag($tag, '', $options);
    }
}