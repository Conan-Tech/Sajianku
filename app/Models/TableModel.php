<?php

namespace App\Models;

use CodeIgniter\Model;

class TableModel extends Model
{
    protected $table      = 'meja';
    protected $primaryKey = 'No_Meja';

    protected $allowedFields = ['No_Meja', 'Kapasitas', 'Status_Ketersediaan'];

    public function fetchDataTable($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('No_Meja', $id)->first();
    }

    public function fetchDataTableByStatus($status)
    {
        return $this->where('Status_Ketersediaan', $status)->findAll();
    }
}
