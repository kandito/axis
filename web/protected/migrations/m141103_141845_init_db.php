<?php

class m141103_141845_init_db extends CDbMigration
{
	public function safeUp()
    {
        //create table users
    	$this->createTable('mki_users', [
    		'id_user' => 'pk',
    		'username' => 'varchar(16) NOT NULL',
    		'password' => 'varchar(32) NOT NULL',
    		'name' => 'varchar(50)',
    		'role' => 'integer(2) NOT NULL',
    	]);

        //create table user_assesments
        $this->createTable('mki_user_assesments', [
            'id_user_assesment' => 'pk',
            'id_user' => 'integer NOT NULL',
            'id_assesment' => 'integer NOT NULL',
        ]);

        //create table assessments
        $this->createTable('mki_assesments', [
            'id_assesment' => 'pk',
            'name' => 'varchar(50) NOT NULL',
            'description' => 'text',
            'date' => 'date',
            'time' => 'time',
            'objectives' => 'text',
            'location' => 'text',
            'requirements' => 'text',
            'id_system' => 'integer',
        ]);

        //create table standard
        $this->createTable('mki_standards', [
            'id_standard' => 'pk',
            'name' => 'varchar(50) NOT NULL',
            'purpose' => 'text',
            'scope' => 'text',
            'audience' => 'text',
            'description' => 'text',
            'id_assesment' => 'integer',
        ]);

        //create table step
        $this->createTable('mki_steps', [
            'id_step' => 'pk',
            'name' => 'varchar(50) NOT NULL',
            'description' => 'text',
            'order' => 'integer',
            'notes' => 'text',
            'guidelines' => 'text',
            'tools' => 'text',
            'id_standard' => 'integer',
        ]);

        //create table step result
        $this->createTable('mki_step_results', [
            'id_step_result' => 'pk',
            'value' => 'varchar(20) NOT NULL',
            'notes' => 'text',
            'time' => 'time',
            'date' => 'date',
            'comment' => 'text',
            'id_assesment' => 'integer',
            'id_step' => 'integer',
        ]);

        //create table step result
        $this->createTable('mki_systems', [
            'id_system' => 'pk',
            'name' => 'varchar(50) NOT NULL',
            'description' => 'text',
            'number_of_user' => 'integer',
            'person_in_charge' => 'varchar(50)',
        ]);

        //add FK user assesment
        $this->addForeignKey(
            'fk_user_assesment',
            'mki_user_assesments',
            'id_user',
            'mki_users',
            'id_user',
            'CASCADE',
            'CASCADE'
            );

        //add FK assesment user
        $this->addForeignKey(
            'fk_assesment_user',
            'mki_user_assesments', 'id_assesment',
            'mki_assesments', 'id_assesment',
            'CASCADE',
            'CASCADE'
            );

        //add FK standard assesment
        $this->addForeignKey(
            'fk_assesment_standard',
            'mki_standards', 'id_assesment',
            'mki_assesments', 'id_assesment',
            'CASCADE',
            'CASCADE'
            );

        //add FK step standard
        $this->addForeignKey(
            'fk_step_standard',
            'mki_steps', 'id_standard',
            'mki_standards', 'id_standard',
            'CASCADE',
            'CASCADE'
            );

        //add FK step result assesment
        $this->addForeignKey(
            'fk_step_result_assesment',
            'mki_step_results', 'id_assesment',
            'mki_assesments', 'id_assesment',
            'CASCADE',
            'CASCADE'
            );

        //add FK step result step
        $this->addForeignKey(
            'fk_step_result_step',
            'mki_step_results', 'id_step',
            'mki_steps', 'id_step',
            'CASCADE',
            'CASCADE'
            );

        //add FK step assesment system
        $this->addForeignKey(
            'fk_step_assesment_system',
            'mki_assesments', 'id_system',
            'mki_systems', 'id_system',
            'CASCADE',
            'CASCADE'
            );

        //create admin
        $this->insert('mki_users', [
            'username' => 'admin',
            'password' => '202cb962ac59075b964b07152d234b70',
            'name' => 'Admin',
            'role' => '1',
        ]);

        //create user
        $this->insert('mki_users', [
            'username' => 'user',
            'password' => '202cb962ac59075b964b07152d234b70',
            'name' => 'User',
            'role' => '0',
        ]);
    }

    public function safeDown()
    {
    	$this->dropTable('mki_users');
        $this->dropTable('mki_assesments');
        $this->dropTable('mki_user_assesments');
        $this->dropTable('mki_standards');
        $this->dropTable('mki_steps');
        $this->dropTable('mki_step_results');
        $this->dropTable('mki_systems');
    }
}