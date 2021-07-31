<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Payment extends BaseController
{
    public function index()
    {
        $data = [
            'payment' => $this->orderModel->fetchDataOrderByStatus1()
        ];

        return view('pages/kasir/payment', $data);
    }

    public function processPayment($id)
    {
        $data = [
            'payment' => $this->orderModel->fetchDataOrderById($id),
            'qty' => $this->detailOrderModel->countQytByIdOrder($id),
            'orders' => $this->detailOrderModel->fetchDataDetailOrderByIdOrder($id)
        ];

        // dd($data['payment']);
        // dd($data['qty']);
        return view('pages/kasir/process-payment', $data);
    }


    public function save()
    {
        $this->paymentModel->insert([
            "Id_Pembayaran" => $this->paymentModel->generateIdPembayaran(),
            "Tanggal_Pembayaran" => date("Y-m-d"),
            "Total_Bayar" => $this->request->getVar('bayar'),
            "Id_Order" => $this->request->getVar('id'),
            "Id_Pegawai" => session()->get('id')
        ]);

        $this->orderModel->update($this->request->getVar('id'), [
            "Status_Order" => 2
        ]);

        return redirect()->to('kasir/payment');
    }
}
