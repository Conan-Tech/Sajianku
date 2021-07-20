<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailOrder extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Id_Detail_Order'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
			'Qty'	=> [
				'type'			=> 'INT',
				'constraint'	=> 3,
				'null'			=> FALSE
			],
			'Id_Menu'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
			'Id_Order'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 6,
				'null'			=> FALSE
			],
		]);
		$this->forge->addKey('Id_Detail_Order', TRUE);
		$this->forge->addForeignKey('Id_Menu', 'menu', 'Id_Menu', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('Id_Order', 'order', 'Id_Order', 'CASCADE', 'CASCADE');
		$this->forge->createTable('detail_order');
	}

	public function down()
	{
		$this->forge->dropTable('detail_order');
	}
}
