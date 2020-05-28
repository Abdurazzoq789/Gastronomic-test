<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%festival}}`.
 */
class m200528_183154_create_festival_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%festival}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(45),
            'date' => $this->dateTime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%festival}}');
    }
}
