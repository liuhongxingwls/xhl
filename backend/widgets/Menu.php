<?php
namespace backend\widgets;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Class Menu
 * Theme menu widget.
 */
class Menu extends \yii\widgets\Menu
{
    /**
     * @inheritdoc
     */
    public $linkTemplate = '<a href="{url}">{icon} {label}</a>';
    public $submenuTemplate = "\n<ul {show}>\n{items}\n</ul>\n";
    public $activateParents = true;

    /**
    * 修复MENU中未定义的Contorller
    *
    */
    public $alias = ['gh-car-audit-records'=>'gh-car-mfrs'];

    /**
     * Renders the menu.
     */
    public function run()
    {
        if ($this->route === null && Yii::$app->controller !== null) {
            $this->route = Yii::$app->controller->getRoute();
        }
        if ($this->params === null) {
            $this->params = Yii::$app->request->getQueryParams();
        }
        $items = $this->normalizeItems($this->items, $hasActiveChild);
        if (!empty($items)) {
            $options = $this->options;

            echo $this->renderItems($items);
        }
    }


    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        if(isset($item['items']))
            $linkTemplate = '<a href="{url}">{icon} {label} </a>';
        else
            $linkTemplate = $this->linkTemplate;
        if (isset($item['url']) && $item['url']  != '#') {
            $template = ArrayHelper::getValue($item, 'template', $linkTemplate);
            $replace = !empty($item['icon']) ? [
                '{url}' => Url::to($item['url']),
                '{label}' => $item['label'],
                '{icon}' => Html::icon($item['icon'])
            ] : [
                '{url}' => Url::to($item['url']),
                '{label}' => $item['label'],
                '{icon}' => Html::icon('file-text-o'),
            ];
            return strtr($template, $replace);
        } else {
            $linkTemplate2 = '<a>{icon} {label} </a>';
            $template = ArrayHelper::getValue($item, 'template', $linkTemplate2);
            $replace = !empty($item['icon']) ? [
                '{label}' => $item['label'],
                '{icon}' => Html::icon($item['icon'])
            ] : [
                '{label}' => '<span>'.$item['label'].'</span>',
                '{icon}' => Html::icon('file-text-o'),
            ];
            return strtr($template, $replace);
        }
    }
    /**
     * Recursively renders the menu items (without the container tag).
     * @param array $items the menu items to be rendered recursively
     * @return string the rendering result
     */
    protected function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');

            if(!is_array($item['url'])) {
                $tag = 'li class="xn-openable"';
            }

            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            if (!empty($class)) {
                if (empty($options['class'])) {
                    $options['class'] = implode(' ', $class);
                } else {
                    $options['class'] .= ' ' . implode(' ', $class);
                }
            }
            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $menu .= strtr($this->submenuTemplate, [
                    //'{show}' => $item['active'] ? "style='display: block'" : '',
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }


//var_dump($tag, $menu, $options);
//echo 'aaaaaaaaaaaaaaaaaaaaaa';
            $lines[] = Html::tag($tag, $menu, $options);



        }
        return implode("\n", $lines);
    }


    public static function tagMenu($name, $content = '', $options = [])
    {
        if ($name === null || $name === false) {
            return $content;
        }
        $html = "<$name" . static::renderTagAttributes($options) . '>';
        return isset(static::$voidElements[strtolower($name)]) ? $html : "$html$content</$name>";
    }



    /**
     * @inheritdoc
     */
    protected function normalizeItems($items, &$active)
    {
        foreach ($items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                unset($items[$i]);
                continue;
            }
            if (!isset($item['label'])) {
                $item['label'] = '';
            }
            $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
            $items[$i]['label'] = $encodeLabel ? Html::encode($item['label']) : $item['label'];
            $items[$i]['icon'] = isset($item['icon']) ? $item['icon'] : '';
            $hasActiveChild = false;
            if (isset($item['items'])) {
                $items[$i]['items'] = $this->normalizeItems($item['items'], $hasActiveChild);
                if (empty($items[$i]['items']) && $this->hideEmptyItems) {
                    unset($items[$i]['items']);
                    if (!isset($item['url'])) {
                        unset($items[$i]);
                        continue;
                    }
                }
            }
            if (!isset($item['active'])) {
                if ($this->activateParents && $hasActiveChild || $this->activateItems && $this->isItemActive($item)) {
                    $active = $items[$i]['active'] = true;
                } else {
                    $items[$i]['active'] = false;
                }
            } elseif ($item['active']) {
                $active = true;
            }
        }
        return array_values($items);
    }
    /**
     * Checks whether a menu item is active.
     * This is done by checking if [[route]] and [[params]] match that specified in the `url` option of the menu item.
     * When the `url` option of a menu item is specified in terms of an array, its first element is treated
     * as the route for the item and the rest of the elements are the associated parameters.
     * Only when its route and parameters match [[route]] and [[params]], respectively, will a menu item
     * be considered active.
     * @param array $item the menu item to be checked
     * @return boolean whether the menu item is active
     */
    protected function isItemActive($item)
    {
        if (isset($item['url']) && is_array($item['url']) && isset($item['url'][0])) {
            $route = $item['url'][0];
            if ($route[0] !== '/' && Yii::$app->controller) {
                $route = Yii::$app->controller->module->getUniqueId() . '/' . $route;
            }
            $arrayRoute = explode('/', ltrim($route, '/'));
            $arrayThisRoute = explode('/', $this->route);
            // echo "<pre>";
            // var_dump($arrayRoute);var_dump($arrayThisRoute);
            /**
            * 处理menu中未定义项
            */

            if(isset($this->alias[$arrayThisRoute[1]])){                
                $arrayThisRoute[1] = $this->alias[$arrayThisRoute[1]];
            }
            if ($arrayRoute[0] !== $arrayThisRoute[0]) {
                return false;
            }else{
                if (isset($arrayRoute[1]) && ($arrayRoute[1] === $arrayThisRoute[1])){
                    return true;
                }else{
                    return false;
                }
            }
            // if (isset($arrayRoute[1]) && $arrayRoute[1] !== $arrayThisRoute[1]) {
            //     return false;
            // }
            // if (isset($arrayRoute[2]) && $arrayRoute[2] !== $arrayThisRoute[2]) {
            //     return false;
            // }
            unset($item['url']['#']);
            if (count($item['url']) > 1) {
                foreach (array_splice($item['url'], 1) as $name => $value) {
                    if ($value !== null && (!isset($this->params[$name]) || $this->params[$name] != $value)) {
                        return false;
                    }
                }
            }
            return true;
        }
        return false;
    }
}
