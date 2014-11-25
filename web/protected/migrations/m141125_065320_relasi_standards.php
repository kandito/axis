<?php

class m141125_065320_relasi_standards extends CDbMigration
{	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		//hilangkan kolom FK id_assesment
		$this->dropForeignKey('fk_assesment_standard','mki_standards');
		$this->dropColumn('mki_standards','id_assesment');

		$this->addColumn('mki_assesments','id_standard','integer');
        $this->addForeignKey(
            'fk_assesment_standard',
            'mki_assesments', 'id_standard',
            'mki_standards', 'id_standard',
            'CASCADE',
            'CASCADE'
            );	
	}

	public function safeDown()
	{
	}
	
}