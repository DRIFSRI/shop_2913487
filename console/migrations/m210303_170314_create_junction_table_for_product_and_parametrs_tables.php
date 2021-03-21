<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_parametr}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 * - `{{%parametrs}}`
 */
class m210303_170314_create_junction_table_for_product_and_parametrs_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products_parametrs}}', [
            'products_id' => $this->integer(),
            'parametrs_id' => $this->integer(),
            'PRIMARY KEY(products_id, parametrs_id)',
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-products_parametrs-products_id}}',
            '{{%products_parametrs}}',
            'products_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-products_parametr-products_id}}',
            '{{%products_parametrs}}',
            'products_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );

        // creates index for column `parametr_id`
        $this->createIndex(
            '{{%idx-products_parametrs-parametrs_id}}',
            '{{%products_parametrs}}',
            'parametrs_id'
        );

        // add foreign key for table `{{%parametrs}}`
        $this->addForeignKey(
            '{{%fk-products_parametrs-parametrs_id}}',
            '{{%products_parametrs}}',
            'parametrs_id',
            '{{%parametrs}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-products_parametrs-products_id}}',
            '{{%product_parametr}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-products_parametrs-products_id}}',
            '{{%products_parametrs}}'
        );

        // drops foreign key for table `{{%parametrs}}`
        $this->dropForeignKey(
            '{{%fk-products_parametrs-parametrs_id}}',
            '{{%products_parametrs}}'
        );

        // drops index for column `parametr_id`
        $this->dropIndex(
            '{{%idx-products_parametrs-parametrs_id}}',
            '{{%products_parametrs}}'
        );

        $this->dropTable('{{%products_parametrs}}');
    }
}
