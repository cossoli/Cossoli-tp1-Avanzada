<?php

use yii\db\Migration;

/**
 * Class m221104_220853_apellido_usuario
 */
class m221104_220853_apellido_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('usuario', 'apellido', $this->string(100));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('usuario', 'apellido');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221104_220853_apellido_usuario cannot be reverted.\n";

        return false;
    }
    */
}
