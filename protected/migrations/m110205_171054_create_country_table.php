<?php

class m110205_171054_create_country_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('country', array(
			'id' => 'pk',
			'name' => 'varchar(255) NOT NULL',
		));

		$this->insert('country', array(
			'id' => 1,
			'name' => 'India',
		));
		$this->insert('country', array(
			'id' => 2,
			'name' => 'U.S.A.',
		));
	}

	public function down()
	{
		$this->dropTable('country');
	}
}