<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailOrderModel extends Model
{
    protected $table      = 'detail_order';
    protected $primaryKey = 'Id_Detail_Order';

    protected $allowedFields = ['Id_Detail_Order', 'Qty', 'Id_Menu', 'Id_Order'];


    public function fetchDataDetailOrder($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Detail_Order', $id)->first();
    }

    public function generateIdOrder()
    {
        $data   = $this->selectMax('Id_Detail_Order')->get()->getRowArray();
        $id     = $data['Id_Detail_Order'];

        $order = (int) substr($id, 3, 3);

        $order++;

        $alphabet = 'DT-';
        $id = $alphabet . sprintf("%03s", $order);

        return $id;
    }
}
