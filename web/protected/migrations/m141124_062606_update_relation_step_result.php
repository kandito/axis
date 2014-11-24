<?php

class m141124_062606_update_relation_step_result extends CDbMigration
{
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->dropForeignKey('fk_step_result_user_assesment','mki_step_results');

        $this->addForeignKey(
            'fk_step_result_assesment',
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