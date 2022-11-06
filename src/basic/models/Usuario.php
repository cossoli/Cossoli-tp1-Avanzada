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
class Usuario extends \yii\db\ActiveRecord
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
}
