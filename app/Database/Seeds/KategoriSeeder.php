<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'Id_Kategori' 	=> 'KT-001',
				'Nama_Kategori' => 'Makanan',
			],
			[
				'Id_Kategori' 	=> 'KT-002',
				'Nama_Kategori' => 'Minuman',
			]
		];

		// Using Query Builder
		foreach ($data as $d) {
			$this->db->table('kategori')->insert($d);
		}
	}
}
