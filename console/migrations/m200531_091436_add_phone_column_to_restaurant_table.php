<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%restaurant}}`.
 */
class m200531_091436_add_phone_column_to_restaurant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%restaurant}}', 'phone', $this->string(45));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%restaurant}}', 'phone');
    }
}
