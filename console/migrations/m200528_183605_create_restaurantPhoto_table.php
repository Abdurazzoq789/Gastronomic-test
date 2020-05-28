<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%restaurantPhoto}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%restaurant}}`
 */
class m200528_183605_create_restaurantPhoto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%restaurantPhoto}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->string(45),
            'restaurant_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `restaurant_id`
        $this->createIndex(
            '{{%idx-restaurantPhoto-restaurant_id}}',
            '{{%restaurantPhoto}}',
            'restaurant_id'
        );

        // add foreign key for table `{{%restaurant}}`
        $this->addForeignKey(
            '{{%fk-restaurantPhoto-restaurant_id}}',
            '{{%restaurantPhoto}}',
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
            '{{%fk-restaurantPhoto-restaurant_id}}',
            '{{%restaurantPhoto}}'
        );

        // drops index for column `restaurant_id`
        $this->dropIndex(
            '{{%idx-restaurantPhoto-restaurant_id}}',
            '{{%restaurantPhoto}}'
        );

        $this->dropTable('{{%restaurantPhoto}}');
    }
}
