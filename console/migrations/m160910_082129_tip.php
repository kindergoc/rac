<?php

use yii\db\Migration;

class m160910_082129_tip extends Migration
{
    public function up()
    {
        $this->createTable('{{tip}}',[
            'id'=>'pk',
            'deleted'=>'boolean DEFAULT FALSE',
            'naziv'=>'string NOT NULL',
            'poredak'=>'integer',
            'opis'=>'text'
        ],'ENGINE=InnoDB COLLATE=utf8_general_ci');
    }

    public function down()
    {
        $this->dropTable('{{tip}}');
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
