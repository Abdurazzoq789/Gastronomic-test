<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200528_182958_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(45),
            'date' => $this->dateTime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'description' => $this->text(),
        ]);

        $this->createIndex(
            'idx-news-news_title',
            'news',
            'title'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropIndex(
            'idx-news-news_title',
            'news'
        );

        $this->dropTable('{{%news}}');
    }
}
