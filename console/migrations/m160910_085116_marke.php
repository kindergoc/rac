<?php

use yii\db\Migration;

class m160910_085116_marke extends Migration
{
    public function up()
    { $this->createTable('{{marke}}',[
        'id'=>'pk',
        'deleted'=>'boolean DEFAULT FALSE',
        'naziv'=>'string NOT NULL',
        'poredak'=>'integer',
    ],'ENGINE=InnoDB COLLATE=utf8_general_ci');
    }



    public function down()
    {
       $this->dropTable('{{marke}}');
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
