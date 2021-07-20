<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Meja extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'No_Meja'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 2,
				'null'			=> FALSE
			],
			'Kapasitas'	=> [
				'type'			=> 'INT',
				'constraint'	=> 1,
				'null'			=> FALSE
			],
			'Status_Ketersediaan'	=> [
				'type'			=> 'INT',
				'constraint'	=> 1,
				'null'			=> FALSE
			],
		]);
		$this->forge->addKey('No_Meja', TRUE);
		$this->forge->createTable('meja');
	}

	public function down()
	{
		$this->forge->dropTable('meja');
	}
}
