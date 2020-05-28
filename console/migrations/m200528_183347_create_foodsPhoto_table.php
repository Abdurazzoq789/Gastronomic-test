<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%foodsPhoto}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%foods}}`
 */
class m200528_183347_create_foodsPhoto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%foodsPhoto}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->string(45),
            'foods_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `foods_id`
        $this->createIndex(
            '{{%idx-foodsPhoto-foods_id}}',
            '{{%foodsPhoto}}',
            'foods_id'
        );

        // add foreign key for table `{{%foods}}`
        $this->addForeignKey(
            '{{%fk-foodsPhoto-foods_id}}',
            '{{%foodsPhoto}}',
            'foods_id',
            '{{%foods}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%foods}}`
        $this->dropForeignKey(
            '{{%fk-foodsPhoto-foods_id}}',
            '{{%foodsPhoto}}'
        );

        // drops index for column `foods_id`
        $this->dropIndex(
            '{{%idx-foodsPhoto-foods_id}}',
            '{{%foodsPhoto}}'
        );

        $this->dropTable('{{%foodsPhoto}}');
    }
}
