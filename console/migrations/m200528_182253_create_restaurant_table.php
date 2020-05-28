<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%restaurant}}`.
 */
class m200528_182253_create_restaurant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%restaurant}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45),
            'region' => $this->string(45),
            'address' => $this->string(100),
        ]);
        $this->createIndex(
            'idx-restaurant-restaurant_name',
            'restaurant',
            'name'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%restaurant}}');

         $this->dropIndex(
            'idx-restaurant-restaurant_name',
            'restaurant'
        );
    }
}
