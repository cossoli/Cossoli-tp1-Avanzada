<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $username
 * @property string $name
 * @property int|null $passwword
 * @property int|null $authKey
 * @property int|null $accesToken
 * @property string|null $apellido
 */
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface

{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            //[['passwword', 'authKey', 'accesToken'], 'default', 'value' => null],
            //[['passwword', 'authKey', 'accesToken'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['apellido', 'required '], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'name' => 'Nombre',
            'passwword' => 'Passwword',
            'authKey' => 'AuthKey',
            'accesToken' => 'AccesToken',
            'apellido' => 'apellido',
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }
     
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['accesToken'=>$token]);
    }
    
    public static function findbYUsername ($username)
    {
       return self::findOne(['username'=>$username]);    

    }
    public function getId()
    {
        return $this->id;

    }
    public function getAuthKey()
    {
        return $this->authkey;
    }
    
    public function validateAuthKey($authKey)
    {
        return $this->authKey ===$authKey;
    } 
    public function validatePassword($password)
    {
        return password_verify($password, $this->passwword);
    }

}