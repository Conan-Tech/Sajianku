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

        return $this->where('Id_Order', $id)->findAll();
    }

    public function fetchDataOrderById($id)
    {
        return $this->where('Id_Order', $id)->first();
    }

    public function fetchDataOrderByDate($tgl1 = null, $tgl2 = null)
    {
        if (($tgl1 == false) and ($tgl2 == false)) {
            $this->where('Status_Order', 2)->groupBy('Tanggal_Order');
            return $this->findAll();
        } else {
            return $this->where("Tanggal_Order BETWEEN '$tgl1' AND '$tgl2'")
                ->where('Status_Order', 2)
                ->groupBy('Tanggal_Order')
                ->findAll();
        }
    }

    public function get_count($dt = null)
    {
        $this->where('Tanggal_Order', $dt)->where('Status_Order', 2);
        return $this->countAllResults();
    }

    public function sum_price($pr = null)
    {
        return $this->selectSum('Total_Harga')
            ->where('Tanggal_Order', $pr)
            ->get()->getRowArray();
    }

    public function fetchJoinDataOrder($id = null)
    {
        if ($id == false) {
            return $this->join('detail_order', 'detail_order.Id_Order = order.Id_Order')->where('Status_Order', 2)
                ->findAll();
        }

        return $this->select('*')
            ->selectSum('detail_order.Qty')
            ->join('detail_order', 'detail_order.Id_Order = order.Id_Order')
            ->where('order.Tanggal_Order', $id)
            ->where('Status_Order', 2)
            ->groupBy('order.Id_Order')
            ->findAll();
    }

    public function sumAll()
    {
        return $this->selectSum('Total_Harga')->get()->getRowArray();;
    }

    public function fetchDataOrderByStatus($status = null)
    {
        return $this->where('Status_Order', 0)
            ->orWhere('Status_Order', $status)->findAll();
    }

    public function fetchDataOrderByStatus1()
    {
        return $this->where('Status_Order', 1)->findAll();
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
        return $this->selectSum('Total_Harga')->where(['Tanggal_Order' => date('Y-m-d'), 'Status_Order' => 2])->get()->getRowArray();
    }

    public function countOrderByStatus($status)
    {
        return $this->selectCount('*')->where('Status_Order', $status)->countAllResults();
    }
}
