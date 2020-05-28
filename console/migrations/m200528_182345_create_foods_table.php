<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%foods}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%restaurant}}`
 */
class m200528_182345_create_foods_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%foods}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'description' => $this->text(),
            'type' => $this->string(45),
            'ingredient' => $this->string(255),
            'restaurant_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            '{{%idx-foods-name}}',
            '{{%foods}}',
            'name'
        );

        // creates index for column `restaurant_id`
        $this->createIndex(
            '{{%idx-foods-restaurant_id}}',
            '{{%foods}}',
            'restaurant_id'
        );

        // add foreign key for table `{{%restaurant}}`
        $this->addForeignKey(
            '{{%fk-foods-restaurant_id}}',
            '{{%foods}}',
            'restaurant_id',
            '{{%restaurant}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%restaurant}}`
        $this->dropForeignKey(
            '{{%fk-foods-restaurant_id}}',
            '{{%foods}}'
        );

        // drops index for column `restaurant_id`
        $this->dropIndex(
            '{{%idx-foods-restaurant_id}}',
            '{{%foods}}'
        );

        $this->dropIndex(
            '{{%idx-foods-name}}',
            '{{%foods}}',
        );

        $this->dropTable('{{%foods}}');
    }
}
