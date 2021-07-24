<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'order';
    protected $primaryKey = 'Id_Order';

    protected $allowedFields = ['Id_Order', 'Tanggal_Order', 'Nama_Pemesan', 'Total_Harga', 'Catatan', 'Status_Order', 'No_meja', 'Id_Pegawai'];


    public function fetchDataOrder($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Order', $id)->first();
    }
}
