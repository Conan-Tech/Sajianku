<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Id_Pembayaran'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
			'Tanggal_Pembayaran'	=> [
				'type'			=> 'DATE',
				'null'			=> FALSE
			],
			'Total_Bayar'	=> [
				'type'			=> 'FLOAT',
				'constraint'	=> 9,
				'null'			=> FALSE
			],
			'Id_Order'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
			'Id_Pegawai'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 8,
				'null'			=> FALSE
			],
		]);
		$this->forge->addKey('Id_Pembayaran', TRUE);
		$this->forge->addForeignKey('Id_Order', 'order', 'Id_Order', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('Id_Pegawai', 'pegawai', 'Id_Pegawai', 'CASCADE', 'CASCADE');
		$this->forge->createTable('pembayaran');
	}

	public function down()
	{
		$this->forge->dropTable('pembayaran');
	}
}
