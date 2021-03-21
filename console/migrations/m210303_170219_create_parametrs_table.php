<?php

use yii\db\Migration;

/**
 * Class m210303_170219_create_table_parametr
 */
class m210303_170219_create_parametrs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%parametrs}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%parametrs}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210303_170219_create_table_parametr cannot be reverted.\n";

        return false;
    }
    */
}
