<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PembayaranSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'Id_Pembayaran' 		=> 'TR-001',
			'Tanggal_Pembayaran'  	=> '2021-07-18',
			'Total_Bayar'			=> 55000,
			'Id_Order'				=> 'OR-001',
			'Id_Pegawai'			=> '10119093',
		];

		// Using Query Builder
		$this->db->table('pembayaran')->insert($data);
	}
}
