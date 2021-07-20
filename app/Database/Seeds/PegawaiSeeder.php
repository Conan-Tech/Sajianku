<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'Id_Pegawai' 	=> '10119090',
				'Nama_Pegawai'  => 'Ahmad Sanusi',
				'Jabatan'		=> 'Admin',
				'Username'		=> 'admin',
				'Password'		=> password_hash('admin', PASSWORD_BCRYPT),
			],
			[
				'Id_Pegawai' 	=> '10119091',
				'Nama_Pegawai'  => 'Roni Suhendar',
				'Jabatan'		=> 'Pelayan',
				'Username'		=> 'pelayan',
				'Password'		=> password_hash('pelayan', PASSWORD_BCRYPT),
			],
			[
				'Id_Pegawai' 	=> '10119092',
				'Nama_Pegawai'  => 'Jajang Nurjaman',
				'Jabatan'		=> 'Koki',
				'Username'		=> 'koki',
				'Password'		=> password_hash('koki', PASSWORD_BCRYPT),
			],
			[
				'Id_Pegawai' 	=> '10119093',
				'Nama_Pegawai'  => 'Intan Permatasari',
				'Jabatan'		=> 'Kasir',
				'Username'		=> 'kasir',
				'Password'		=> password_hash('kasir', PASSWORD_BCRYPT),
			]
		];

		// Using Query Builder
		foreach ($data as $d) {
			$this->db->table('pegawai')->insert($d);
		}
	}
}
