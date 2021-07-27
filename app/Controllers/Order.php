<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function index()
    {
        $data = [
            'availableTable'    => $this->tableModel->fetchDataTableByStatus(1),
            'bookedTable'       => $this->tableModel->fetchDataTableByStatus(0)
        ];

        return view('pages/pelayan/order-table', $data);
    }

    public function order_menu()
    {
        $data = [
            'foods'     => $this->menusModel->fetchDataMenusByCategories("Makanan"),
            'drinks'    => $this->menusModel->fetchDataMenusByCategories('Minuman'),
        ];

        if (!empty($_SESSION['cart'])) {
            $jumlah = count($_SESSION['cart']);
            // dd($jumlah);
            $menu = [];
            $cart = array_values($_SESSION['cart']);
            for ($i = 0; $i < $jumlah; $i++) {
                $menu[$i] = $cart[$i];
            }


            $data = [
                'foods'     => $this->menusModel->fetchDataMenusByCategories("Makanan"),
                'drinks'    => $this->menusModel->fetchDataMenusByCategories('Minuman'),
                'carts'     => $this->menusModel->fetchMenuCart($menu)
            ];
        }

        return view('pages/pelayan/order-menu', $data);
    }

    public function save()
    {
        // Insert Order
        $idOrder = $this->orderModel->generateIdOrder();
        $this->orderModel->insert([
            'Id_Order'      => $idOrder,
            'Tanggal_Order' => date('Y-m-d'),
            'Nama_Pemesan'  => session()->get('pemesan'),
            'Total_Harga'   => $this->request->getVar('grand-total'),
            'Catatan'       => $this->request->getVar('catatan'),
            'Status_Order'  => 0,
            'No_Meja'       => session()->get('meja'),
            'Id_Pegawai'    => session()->get('id')
        ]);

        //Insert Detail Order
        $jumlah_data = count((array) $this->request->getVar('id'));

        $result = array();
        for ($i = 0; $i < $jumlah_data; $i++) {
            $idDetailOrder = mt_rand(1, 999);
            $result[] = array(
                'Id_Detail_Order'   => 'DT-' . $idDetailOrder,
                'Qty'               => $this->request->getVar('qty')[$i],
                'Id_Menu'           => $this->request->getVar('id')[$i],
                'Id_Order'          => $idOrder
            );
        }
        $this->detailOrderModel->insertBatch($result);

        // update Status Table
        $this->tableModel->update(session()->get('meja'), [
            'Status_Ketersediaan'   => 0
        ]);

        session()->remove('meja');
        session()->remove('pemesan');
        session()->removeTempdata('cart');

        return redirect()->to('/pelayan/order');
    }
}
