<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%restaurant}}`.
 */
class m200531_091635_add_open_column_to_restaurant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%restaurant}}', 'open', $this->time());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%restaurant}}', 'open');
    }
}
