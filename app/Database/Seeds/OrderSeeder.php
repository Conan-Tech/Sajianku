<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'Id_Order' 			=> 'OR-001',
			'Tanggal_Order'  	=> '2021-07-18',
			'Nama_Pemesan'		=> 'Rahmat',
			'Total_Harga'		=> 55000,
			'Catatan'			=> '',
			'Status_Order'		=> 1,
			'No_Meja'			=> '01',
			'Id_Pegawai'		=> '10119091',
		];

		// Using Query Builder
		$this->db->table('order')->insert($data);
	}
}
