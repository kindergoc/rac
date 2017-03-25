<?php

use yii\db\Migration;

class m160910_082857_mjenjac extends Migration
{
    public function up()
    {
        $this->createTable('{{mjenjac}}',[
            'id'=>'pk',
            'deleted'=>'boolean DEFAULT FALSE',
            'naziv'=>'string NOT NULL',
        ],'ENGINE=InnoDB COLLATE=utf8_general_ci');
    }

    public function down()
    {
        $this->dropTable('{{mjenjac}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
