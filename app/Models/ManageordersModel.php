<?php

namespace App\Models;

use CodeIgniter\Model;

class ManageordersModel extends Model
{
    protected $table      = 'order';
    protected $primaryKey = 'Id_Order';

    protected $allowedFields = ['Id_Order', 'Tanggal_Order', 'Nama_Pemesan', 'Total_Harga', 'Catatan', 'Status_Order', 'No_Meja'];

    public function fetchDataManageorders($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Order', $id)->first();
    }

    public function fetchJoinManageorders($id = null)
    {
        if ($id == false) {

            return $this->join('detail_order', 'detail_order.Id_Order = order.Id_Order')
                ->join('menu', 'menu.Id_Menu = detail_order.Id_Menu')
                ->findAll();
        }
        return $this->join('detail_order', 'detail_order.Id_Order = order.Id_Order')
            ->join('menu', 'menu.Id_Menu = detail_order.Id_Menu')
            ->where('order.Id_Order', $id)->first();
    }
}
