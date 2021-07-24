<?php

namespace App\Models;

use CodeIgniter\Model;

class MenusModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'Id_Menu';

    protected $allowedFields = ['Id_Menu', 'Nama_Menu', 'Harga', 'Status_Ketersediaan'];


    public function fetchDataMenus($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Menu', $id)->first();
    }
}
