<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Id_Order'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
			'Tanggal_Order'	=> [
				'type'			=> 'DATE',
				'null'			=> FALSE
			],
			'Nama_Pemesan'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 50,
				'null'			=> FALSE
			],
			'Total_Harga'	=> [
				'type'			=> 'FLOAT',
				'constraint'	=> 9,
				'null'			=> FALSE
			],
			'Catatan'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255,
				'null'			=> TRUE
			],
			'Status_Order'	=> [
				'type'			=> 'INT',
				'constraint'	=> 1,
				'null'			=> FALSE
			],
			'No_Meja'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 2,
				'null'			=> FALSE
			],
			'Id_Pegawai'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 8,
				'null'			=> FALSE
			],
		]);
		$this->forge->addKey('Id_Order', TRUE);
		$this->forge->addForeignKey('No_Meja', 'meja', 'No_Meja', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('Id_Pegawai', 'pegawai', 'Id_Pegawai', 'CASCADE', 'CASCADE');
		$this->forge->createTable('order');
	}

	public function down()
	{
		$this->forge->dropTable('order');
	}
}
