<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DetailOrderSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'Id_Detail_Order' 	=> 'DT-001',
			'Qty' 				=> 1,
			'Id_Menu'			=> 'MN-001',
			'Id_Order'			=> 'OR-001',
		];

		// Using Query Builder
		$this->db->table('detail_order')->insert($data);
	}
}
