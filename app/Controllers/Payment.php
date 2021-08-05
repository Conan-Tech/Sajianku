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
        $id = $this->request->getVar('id');

        $this->paymentModel->insert([
            "Id_Pembayaran" => $this->paymentModel->generateIdPembayaran(),
            "Tanggal_Pembayaran" => date("Y-m-d"),
            "Tunai" => $this->request->getVar('tunai'),
            "Kembalian" => ($this->request->getVar('tunai') - $this->request->getVar('bayar')),
            "Total_Bayar" => $this->request->getVar('bayar'),
            "Id_Order" => $this->request->getVar('id'),
            "Id_Pegawai" => session()->get('id')
        ]);

        $this->orderModel->update($this->request->getVar('id'), [
            "Status_Order" => 2
        ]);

        return redirect()->to("kasir/print/$id");
    }

    public function print($id)
    {
        $data = [
            'payment' => $this->orderModel->fetchDataOrderById($id),
            'cashier' => $this->orderModel->getCashierName($id),

            'kembalian' => $this->paymentModel->fetchKembalian($id),
            'orders' => $this->detailOrderModel->fetchDataDetailOrderByIdOrder($id)
        ];

        // dd($data['kembalian']);

        return view('pages/kasir/nota', $data);
    }
}
