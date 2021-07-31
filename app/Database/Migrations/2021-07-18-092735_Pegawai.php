<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Id_Pegawai'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 8,
				'null'			=> FALSE
			],
			'Nama_Pegawai'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 70,
				'null'			=> FALSE
			],
			'Jabatan'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 10,
				'null'			=> FALSE
			],
			'Username'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 50,
				'null'			=> FALSE
			],
			'Password'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255,
				'null'			=> FALSE
			],
		]);
		$this->forge->addKey('Id_Pegawai', TRUE);
		$this->forge->createTable('pegawai');
	}

	public function down()
	{
		$this->forge->dropTable('pegawai');
	}
}
