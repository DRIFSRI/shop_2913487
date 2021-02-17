<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Product}}`.
 */
class m210215_110840_create_Product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'price' => $this->decimal(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Product}}');
    }
}
