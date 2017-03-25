<?php

use yii\db\Migration;

class m160910_091634_auto extends Migration
{
    public function up()
    {

        $this->createTable('{{auto}}', [
            'id'=>'pk',
            'tip'=>'integer',
            'naziv'=>'string',
            'marka'=>'integer',
            'mjenjac'=>'integer',
            'gorivo'=>'integer',
            'vrata'=>'integer',
            'oprema'=>'text',
            'dun'=>'text',
            'cijene'=>'text',
            'cijena'=>'integer',
            'prtljaznik'=>'string',
            'putnika'=>'integer',
            'link'=>'string',
            'order'=>'integer',
            'naslovna'=>'integer',
            'opis'=>'text',
            'firma'=>'integer',
            'pogon'=>'integer',


        ],
            'ENGINE=InnoDB COLLATE=utf8_general_ci');






        $this->addForeignKey('fk_auto_tip', 'auto','tip','tip','id','CASCADE');
        $this->addForeignKey('fk_auto_marka', 'auto','marka','marke','id','CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_auto_tip','auto');
        $this->dropForeignKey('fk_auto_marka','auto');
        $this->dropTable('{{auto}}');


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
