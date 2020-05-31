<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%restaurant}}`.
 */
class m200531_091706_add_close_column_to_restaurant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%restaurant}}', 'close', $this->time());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%restaurant}}', 'close');
    }
}
