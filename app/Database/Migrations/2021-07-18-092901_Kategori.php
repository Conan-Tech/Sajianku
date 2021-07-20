<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Id_Kategori'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
			'Nama_Kategori'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 25,
				'null'			=> FALSE
			],
		]);
		$this->forge->addKey('Id_Kategori', TRUE);
		$this->forge->createTable('kategori');
	}

	public function down()
	{
		$this->forge->dropTable('kategori');
	}
}
