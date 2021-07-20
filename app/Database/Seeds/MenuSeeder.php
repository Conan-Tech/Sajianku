<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'Id_Menu' 				=> 'MN-001',
				'Nama_Menu' 			=> 'Pizza',
				'Harga'					=> 55000,
				'Photo'					=> 'pizza.jpg',
				'Status_Ketersediaan'	=> 1,
				'Id_Kategori'			=> 'KT-001'
			],
			[
				'Id_Menu' 				=> 'MN-002',
				'Nama_Menu' 			=> 'Juice Alpukat',
				'Harga'					=> 15000,
				'Photo'					=> 'jus-alpukast.jpg',
				'Status_Ketersediaan'	=> 1,
				'Id_Kategori'			=> 'KT-002'
			]
		];

		// Using Query Builder
		foreach ($data as $d) {
			$this->db->table('menu')->insert($d);
		}
	}
}
