<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Id_Menu'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
			'Nama_Menu'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 70,
				'null'			=> FALSE
			],
			'Harga'	=> [
				'type'			=> 'FLOAT',
				'constraint'	=> 9,
				'null'			=> FALSE
			],
			'Photo'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'null'			=> FALSE
			],
			'Status_Ketersediaan'	=> [
				'type'			=> 'INT',
				'constraint'	=> 1,
				'null'			=> FALSE
			],
			'Id_Kategori'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
		]);
		$this->forge->addKey('Id_Menu', TRUE);
		$this->forge->addForeignKey('Id_Kategori', 'kategori', 'Id_Kategori', 'CASCADE', 'CASCADE');
		$this->forge->createTable('menu');
	}

	public function down()
	{
		$this->forge->dropTable('menu');
	}
}
