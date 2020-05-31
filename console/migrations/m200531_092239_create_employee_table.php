<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%restaurant}}`
 */
class m200531_092239_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee}}', [
            'id' => $this->primaryKey(),
            'restaurant_id' => $this->integer()->notNull(),
            'firstName' => $this->string(50),
            'lastName' => $this->string(50),
            'role' => $this->string(50)->notNull(),
            'photo' => $this->string(50),
            'phoneNumber' => $this->string(50),
        ]);

        // creates index for column `restaurant_id`
        $this->createIndex(
            '{{%idx-employee-restaurant_id}}',
            '{{%employee}}',
            'restaurant_id'
        );

        // add foreign key for table `{{%restaurant}}`
        $this->addForeignKey(
            '{{%fk-employee-restaurant_id}}',
            '{{%employee}}',
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
            '{{%fk-employee-restaurant_id}}',
            '{{%employee}}'
        );

        // drops index for column `restaurant_id`
        $this->dropIndex(
            '{{%idx-employee-restaurant_id}}',
            '{{%employee}}'
        );

        $this->dropTable('{{%employee}}');
    }
}
