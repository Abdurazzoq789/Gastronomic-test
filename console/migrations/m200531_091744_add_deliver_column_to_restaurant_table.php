<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%restaurant}}`.
 */
class m200531_091744_add_deliver_column_to_restaurant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%restaurant}}', 'deliver', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%restaurant}}', 'deliver');
    }
}
