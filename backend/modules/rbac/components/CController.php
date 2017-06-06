<?php
namespace rbac\components;

use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

/**
 * AreaController implements the CRUD actions for Area model.
 */
class CController extends Controller
{
    public static $ROLE_WHITE = array('超级管理员','后台管理员基本角色');


    /**
     * 检查权限白名单（超级管理员不校验权限）
     * @param $user_role
     * @return bool
     */
    private function _checkRoleWhite($user_role)
    {
        $res = false;
        foreach(self::$ROLE_WHITE as $chk_role)
        {
            if(in_array($chk_role, $user_role))
            {
                $res = true;
                break;
            }
        }
        return $res;
    }
/*
    public function beforeAction($action)
    {
        if(empty(Yii::$app->user->id) && Yii::$app->getRequest()->getIsAjax())
        {
            echo json_encode(array('status' => false, 'error'=>'请登录！','msg' =>'请登录！' ));
            exit;
        }
        elseif(empty(Yii::$app->user->id))
        {
            echo "<script>top.location.href = '".Yii::$app->getHomeUrl()."'</script>";
            exit;
        }
        if( $this->_checkRoleWhite(Yii::$app->user->identity->role) )
        {
            return true;
        }

        $module = !empty($this->module)?$this->module->id:'backend';
        if(Yii::$app->controller->id == 'upload' || $module == 'debug')
        {
            return true;
        }
        $check_action = "/".$module.'/'.Yii::$app->controller->id.'/'.Yii::$app->controller->action->id;
        if(Yii::$app->user->can($check_action)){
            return true;
        }else{
            echo "没有访问权限！";exit;
            throw new ForbiddenHttpException("没有访问权限！");
        }
    }
*/
    protected function _regularRule($string,$replace)
    {
        $string = $this->_regularDateRule($string);
        $newstring = preg_replace_callback(
            "/{{([\w]+)}}/",
            function($match) use ($replace) {
                return isset($replace[$match[1]]) ? $replace[$match[1]] : ''  ;
            },
            $string
        );
        return $newstring;
    }

    protected function _regularDateRule($string)
    {
        return preg_replace_callback(
            "/{{([Y|m|d|H|i|s|A|a])}}/",
            function($match) {
                return date($match[1])  ;
            },
            $string
        );
    }

    public function renderJson($status, $msg, $data = [])
    {
        Yii::$app->response->format = 'json';
        return compact('status', 'msg', 'data');

    }
}