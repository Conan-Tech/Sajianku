<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DBSeeder extends Seeder
{
	public function run()
	{
		$this->call('PegawaiSeeder');
		$this->call('KategoriSeeder');
		$this->call('MejaSeeder');
		$this->call('MenuSeeder');
		$this->call('OrderSeeder');
		$this->call('DetailOrderSeeder');
		$this->call('PembayaranSeeder');
	}
}
