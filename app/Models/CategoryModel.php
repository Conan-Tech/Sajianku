<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'Id_Kategori';

    protected $allowedFields = ['Id_Kategori', 'Nama_Kategori'];

    public function generateIdKategori()
    {
        $data   = $this->selectMax('Id_Kategori')->get()->getRowArray();
        $id     = $data['Id_Kategori'];

        $order = (int) substr($id, 3, 3);

        $order++;

        $alphabet = 'KT-';
        $id = $alphabet . sprintf("%03s", $order);

        return $id;
    }

    public function fetchDataCategory($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Kategori', $id)->first();
    }
}
