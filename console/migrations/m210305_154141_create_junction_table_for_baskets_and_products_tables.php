<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%baskets_products}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%baskets}}`
 * - `{{%products}}`
 */
class m210305_154141_create_junction_table_for_baskets_and_products_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%baskets_products}}', [
            'baskets_id' => $this->integer(),
            'products_id' => $this->integer(),
            'PRIMARY KEY(baskets_id, products_id)',
        ]);

        // creates index for column `baskets_id`
        $this->createIndex(
            '{{%idx-baskets_products-baskets_id}}',
            '{{%baskets_products}}',
            'baskets_id'
        );

        // add foreign key for table `{{%baskets}}`
        $this->addForeignKey(
            '{{%fk-baskets_products-baskets_id}}',
            '{{%baskets_products}}',
            'baskets_id',
            '{{%baskets}}',
            'id',
            'CASCADE'
        );

        // creates index for column `products_id`
        $this->createIndex(
            '{{%idx-baskets_products-products_id}}',
            '{{%baskets_products}}',
            'products_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-baskets_products-products_id}}',
            '{{%baskets_products}}',
            'products_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%baskets}}`
        $this->dropForeignKey(
            '{{%fk-baskets_products-baskets_id}}',
            '{{%baskets_products}}'
        );

        // drops index for column `baskets_id`
        $this->dropIndex(
            '{{%idx-baskets_products-baskets_id}}',
            '{{%baskets_products}}'
        );

        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-baskets_products-products_id}}',
            '{{%baskets_products}}'
        );

        // drops index for column `products_id`
        $this->dropIndex(
            '{{%idx-baskets_products-products_id}}',
            '{{%baskets_products}}'
        );

        $this->dropTable('{{%baskets_products}}');
    }
}
