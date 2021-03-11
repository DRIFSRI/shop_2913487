<?php
use yii\db\Migration;
/**
 * Handles the creation of table `{{%product}}`.
 */
class m210302_161525_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'price' => $this->decimal(10,2),
            'image' => $this->string(255),
            'count' => $this->integer(4),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
