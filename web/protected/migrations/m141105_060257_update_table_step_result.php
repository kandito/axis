<?php

class m141105_060257_update_table_step_result extends CDbMigration
{
	public function safeUp()
	{
		//hilangkan kolom FK id_assesment
		$this->dropForeignKey('fk_step_result_assesment','mki_step_results');
		$this->dropColumn('mki_step_results','id_assesment');

		//tambahkan FK dari step assesment ke user assesment
		$this->addColumn('mki_step_results','id_user_assesment','integer');
        $this->addForeignKey(
            'fk_step_result_user_assesment',
            'mki_step_results', 'id_user_assesment',
            'mki_user_assesments', 'id_user_assesment',
            'CASCADE',
            'CASCADE'
            );		
	}

	public function safeDown()
	{
	}
}