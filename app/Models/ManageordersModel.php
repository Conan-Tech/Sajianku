<?php

namespace App\Models;

use CodeIgniter\Model;

class ManageordersModel extends Model
{
    protected $table      = 'order';
    protected $primaryKey = 'Id_Order';

    protected $allowedFields = ['Id_Order', 'Nama_Pemesan', 'No_Meja'];

    public function fetchDataManageorders($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('No_Meja', $id)->first();
    }
}
