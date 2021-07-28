<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'order';
    protected $primaryKey = 'Id_Order';

    protected $allowedFields = ['Id_Order', 'Tanggal_Order', 'Nama_Pemesan', 'Total_Harga', 'Catatan', 'Status_Order', 'No_Meja', 'Id_Pegawai'];


    public function fetchDataOrder($id = null)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('Id_Order', $id)->first();
    }

    public function fetchDataOrderByStatus($status = null)
    {
        return $this->where('Status_Order', 0)
            ->orWhere('Status_Order', $status)->findAll();
    }

    public function generateIdOrder()
    {
        $data   = $this->selectMax('Id_Order')->get()->getRowArray();
        $id     = $data['Id_Order'];

        $order = (int) substr($id, 3, 3);

        $order++;

        $alphabet = 'OR-';
        $id = $alphabet . sprintf("%03s", $order);

        return $id;
    }

    public function fetchOrderJoin($id = null)
    {
        if ($id == false) {

            return $this->join('detail_order', 'detail_order.Id_Order = order.Id_Order')
                ->join('menu', 'menu.Id_Menu = detail_order.Id_Menu')
                ->findAll();
        }

        return $this->join('detail_order', 'detail_order.Id_Order = order.Id_Order')
            ->join('menu', 'menu.Id_Menu = detail_order.Id_Menu')
            ->where('order.Id_Order', $id)->findAll();
    }

    public function countOrderByDate()
    {
        return $this->selectCount('*')->where('Tanggal_Order', date('Y-m-d'))->countAllResults();
    }

    public function countRevenueByDate()
    {
        return $this->selectSum('Total_Harga')->where('Tanggal_Order', date('Y-m-d'))->get()->getRowArray();
    }

    public function countOrderByStatus($status)
    {
        return $this->selectCount('*')->where('Status_Order', $status)->countAllResults();
    }
}
