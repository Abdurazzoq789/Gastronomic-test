<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%newsPhoto}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%news}}`
 */
class m200528_183415_create_newsPhoto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%newsPhoto}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->string(45),
            'news_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `news_id`
        $this->createIndex(
            '{{%idx-newsPhoto-news_id}}',
            '{{%newsPhoto}}',
            'news_id'
        );

        // add foreign key for table `{{%news}}`
        $this->addForeignKey(
            '{{%fk-newsPhoto-news_id}}',
            '{{%newsPhoto}}',
            'news_id',
            '{{%news}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%news}}`
        $this->dropForeignKey(
            '{{%fk-newsPhoto-news_id}}',
            '{{%newsPhoto}}'
        );

        // drops index for column `news_id`
        $this->dropIndex(
            '{{%idx-newsPhoto-news_id}}',
            '{{%newsPhoto}}'
        );

        $this->dropTable('{{%newsPhoto}}');
    }
}
