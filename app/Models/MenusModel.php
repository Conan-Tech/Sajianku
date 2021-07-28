<?php

namespace App\Models;

use CodeIgniter\Model;

class MenusModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'Id_Menu';

    protected $allowedFields = ['Id_Menu', 'Nama_Menu', 'Harga', 'Photo', 'Status_Ketersediaan', 'Id_Kategori'];


    public function fetchDataMenus($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Menu', $id)->first();
    }

    public function fetchDataMenusByCategories($category)
    {
        return $this->join('kategori', 'kategori.Id_Kategori = menu.Id_Kategori')
            ->where(['Nama_Kategori' => $category, 'Status_Ketersediaan' => 1])->findAll();
    }

    public function fetchMenuCart($data = array())
    {
        return $this->whereIn('Id_Menu', $data)->findAll();
    }

    public function countMenu()
    {
        return $this->selectCount('*')->countAllResults();
    }
    
}
