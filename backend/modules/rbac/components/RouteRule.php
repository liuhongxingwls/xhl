<?php

namespace rbac\components;

/**
 * RouteRule Rule for check route with extra params.
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 *
 * @since 1.0
 */
class RouteRule extends \yii\rbac\Rule
{
    const RULE_NAME = 'route_rule';

    public $name = self::RULE_NAME;

    /**
     * {@inheritdoc}
     */
    public function execute($user, $item, $params)
    {
        $routeParams = isset($item->data['params']) ? $item->data['params'] : [];
        foreach ($routeParams as $key => $value) {
            if (!array_key_exists($key, $params) || $params[$key] != $value) {
                return false;
            }
        }
        return true;
    }
}
