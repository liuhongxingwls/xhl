<?php

namespace rbac\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "admin".
 *
 * @property string $userid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $realname
 * @property string $lastloginip
 * @property string $lastlogintime
 * @property boolean $account_enabled
 * @property boolean $account_expired
 * @property boolean $account_locked
 * @property boolean $credentials_expired
 * @property int $status
 */
class Admin extends ActiveRecord implements IdentityInterface
{
    public $auth_key;
    public $created_at;
    public $updated_at;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db');
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
         return [
            [['username', 'password', 'status'], 'required'],
            [['lastlogintime'], 'safe'],
            [['account_enabled', 'account_expired', 'account_locked', 'credentials_expired'], 'boolean'],
            [['status'], 'integer'],
            [['username', 'email'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 50],
            [['realname'], 'string', 'max' => 10],
            [['lastloginip'], 'string', 'max' => 15],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => '用户编号',
            'username' => '用户名',
            'password' => '密码',
            'email' => '邮箱',
            'realname' => '真实姓名',
            'lastloginip' => 'Lastloginip',
            'lastlogintime' => 'Lastlogintime',
            'status' => 'status',
            'account_enabled' => 'Account Enabled',
            'account_expired' => 'Account Expired',
            'account_locked' => 'Account Locked',
            'credentials_expired' => 'Credentials Expired',
            'status' => 'Status',
        ];
    }
 /* !CodeTemplates.overridecomment.nonjd!
     * @see \yii\web\IdentityInterface::findIdentity()
     */
    public static function findIdentity($id)
    {
        return static::findOne(['userid' => $id]);
    }

 /* !CodeTemplates.overridecomment.nonjd!
     * @see \yii\web\IdentityInterface::findIdentityByAccessToken()
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
         throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }
    
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password==$this->hashPassword($password);//Yii::$app->security->validatePassword($password, $this->password);
    }
    
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $this->hashPassword($password);//Yii::$app->security->generatePasswordHash($password);
    }
    
    public function hashPassword($password)
    {
        $salt = 'iamsalt';//^_^
        return substr(sha1(sha1($password).$salt),0,32);
    }
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    
    /**
     * 获取登录用户角色
     * @return array|bool|null
     */
    public $_user_role=false;
    public function getRole()
    {
        if ($this->_user_role === false) {
            $user_roles = Yii::$app->authManager->getRolesByUser($this->id);
            foreach($user_roles as $model){
                $this->_user_role[] = $model->name;
            }
        }
        return  (array)$this->_user_role;
    }
    
    /**
     * 获取管理员信息
     */
    public static function getUsername($userid) {
        if(!$userid){
            return '-';
        }
        $user = self::findOne($userid);
        if(empty($user)){
            return '-';
        }else{
            return $user->realname;
        }
    }
    
    /*
    * 获取全部管理员信息
    */
    public static function getAllUser(){
        
        $cache = Yii::$app->cache; 
        $redata = $cache->get('chemi_admin_all');
        if($redata===false){
            $re = Admin::findAll(['status'=>1]);
            $data = yii\helpers\ArrayHelper::map($re,'id','realname');
            $cache->add('chemi_admin_all',json_encode($data),3600);
            return $data;
        }
        return json_decode($redata);
    }

}