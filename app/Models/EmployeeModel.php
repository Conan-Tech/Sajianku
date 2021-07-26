<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'Id_Pegawai';

    protected $allowedFields = ['Id_Pegawai', 'Nama_Pegawai', 'Jabatan', 'Username', 'Password'];


    public function fetchDataEmployee($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Pegawai', $id)->first();
    }

    public function fetchEmployeeByUsername($username)
    {
        return $this->where('Username', $username)->first();
    }
}
