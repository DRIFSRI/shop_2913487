    <?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%baskets}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210305_154026_create_baskets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%baskets}}', [
            'id' => $this->primaryKey(),
            'user' => $this->integer(),
        ]);

        // creates index for column `user`
        $this->createIndex(
            '{{%idx-baskets-user}}',
            '{{%baskets}}',
            'user'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-baskets-user}}',
            '{{%baskets}}',
            'user',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-baskets-user}}',
            '{{%baskets}}'
        );

        // drops index for column `user`
        $this->dropIndex(
            '{{%idx-baskets-user}}',
            '{{%baskets}}'
        );

        $this->dropTable('{{%baskets}}');
    }
}
