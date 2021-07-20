<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MejaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'No_Meja' 				=> '01',
				'Kapasitas'  			=> 4,
				'Status_Ketersediaan'	=> 1,
			],
			[
				'No_Meja' 				=> '02',
				'Kapasitas'  			=> 2,
				'Status_Ketersediaan'	=> 1,
			]
		];

		// Using Query Builder
		foreach ($data as $d) {
			$this->db->table('meja')->insert($d);
		}
	}
}
