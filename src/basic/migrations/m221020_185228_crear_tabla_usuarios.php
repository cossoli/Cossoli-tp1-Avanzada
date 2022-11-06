<?php

use yii\db\Migration;

/**
 * Class m221020_185228_crear_tabla_usuarios
 */
class m221020_185228_crear_tabla_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'username' => $this->primaryKey()->notNull(),
            'name' => $this->string(80)->notNull(),
            'passwword' => $this->integer(8),
            'authKey' => $this->integer(8),
            'accesToken' => $this->integer(8),
        ]);   
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');;

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221020_185228_crear_tabla_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
