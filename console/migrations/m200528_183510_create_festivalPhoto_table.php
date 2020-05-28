<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%festivalPhoto}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%festival}}`
 */
class m200528_183510_create_festivalPhoto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%festivalPhoto}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->string(45),
            'festival_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `festival_id`
        $this->createIndex(
            '{{%idx-festivalPhoto-festival_id}}',
            '{{%festivalPhoto}}',
            'festival_id'
        );

        // add foreign key for table `{{%festival}}`
        $this->addForeignKey(
            '{{%fk-festivalPhoto-festival_id}}',
            '{{%festivalPhoto}}',
            'festival_id',
            '{{%festival}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%festival}}`
        $this->dropForeignKey(
            '{{%fk-festivalPhoto-festival_id}}',
            '{{%festivalPhoto}}'
        );

        // drops index for column `festival_id`
        $this->dropIndex(
            '{{%idx-festivalPhoto-festival_id}}',
            '{{%festivalPhoto}}'
        );

        $this->dropTable('{{%festivalPhoto}}');
    }
}
