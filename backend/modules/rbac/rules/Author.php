<?php
/**
 * Created by PhpStorm.
 * Author: ljt
 * DateTime: 2016/12/1 18:14
 * Description:
 */

namespace backend\modules\rbac\rules;


use yii\rbac\Item;
use yii\rbac\Rule;

class Author extends Rule
{
    public $name = 'author_rule';

    /**
     * @param string|integer $user 用户 ID.
     * @param Item $item 该规则相关的角色或者权限
     * @param array $params 传给 ManagerInterface::checkAccess() 的参数
     * @return boolean 代表该规则相关的角色或者权限是否被允许
     */
    public function execute($user, $item, $params)
    {
        return isset($params['post']) ? $params['post']->created_by == $user : false;
    }
}