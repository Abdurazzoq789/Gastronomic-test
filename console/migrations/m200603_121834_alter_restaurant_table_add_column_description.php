<?php

use yii\db\Migration;

/**
 * Class m200603_121834_alter_restaurant_table_add_column_description
 */
class m200603_121834_alter_restaurant_table_add_column_description extends Migration
{

    private $table = '{{%restaurant}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->table, 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn($this->table, 'description');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200603_121834_alter_restaurant_table_add_column_description cannot be reverted.\n";

        return false;
    }
    */
}
