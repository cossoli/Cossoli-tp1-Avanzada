<?php
// punto 4 models
namespace app\modules\apiv1\models;

class Usuario extends \app\models\Usuario
{
    public function fields(){
        return ['id', 'username', 'name'];
    }

    public function extraFields()
    {
        return ['apellido'];
    }
}
