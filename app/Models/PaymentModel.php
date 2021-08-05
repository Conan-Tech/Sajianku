<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table      = 'pembayaran';
    protected $primaryKey = 'Id_Pembayaran';

    protected $allowedFields = ['Id_Pembayaran', 'Tanggal_Pembayaran', 'Tunai', 'Kembalian', 'Total_Bayar', 'Id_Order', 'Id_Pegawai'];

    public function generateIdPembayaran()
    {
        $data   = $this->selectMax('Id_Pembayaran')->get()->getRowArray();
        $id     = $data['Id_Pembayaran'];

        $order = (int) substr($id, 3, 3);

        $order++;

        $alphabet = 'PB-';
        $id = $alphabet . sprintf("%03s", $order);

        return $id;
    }


    public function fetchDataPayment($id = null)
    {
        if ($id == false) {

            return $this->join('pembayaran', 'order.Id_Order = pembayaran.Id_Order')
                // ->join('pegawai', 'pembayaran.Id_Pegawai = pegawai.Id_Pegawai')
                ->where('order.Status_Order', 1)
                ->findAll();
        }

        return $this->join('pembayaran', 'order.Id_Order = pembayaran.Id_Order')
            // ->join('pegawai', 'pembayaran.Id_Pegawai = pegawai.Id_Pegawai')
            ->join('detail_order', 'order.Id_Order = detail_order.Id_Order')
            ->where('order.Status_Order', 1)
            ->where('order.Id_Order', $id)->first();
    }

    public function fetchEmployeeByUsername($username)
    {
        return $this->where('Username', $username)->first();
    }

    public function fetchKembalian($id)
    {
        return ($id == null) ? 0 : $this->first();
    }
}
