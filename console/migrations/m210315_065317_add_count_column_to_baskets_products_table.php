    <?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%baskets_products}}`.
 */
class m210315_065317_add_count_column_to_baskets_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%baskets_products}}', 'count', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%baskets_products}}', 'count');
    }
}
