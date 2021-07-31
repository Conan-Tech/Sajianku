<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        if (isset($_POST['meja'])) {
            session()->set('meja', $_POST['meja']);
            session()->set('pemesan', $_POST['pemesan']);
        }

        // $orders = $this->detailOrderModel->fetchDataDetailOrderByIdOrder($_POST['id']);
        // $menu = [];
        // foreach ($orders as $key => $order) {
        //     $menu[$key] = $order['Id_Menu'];
        //     array_push($_SESSION['cart'], $menu[$key]);
        // }

        // if (in_array($menu, $_SESSION['cart'])) {
        //     $_SESSION['message'] = 'Product already in cart';
        // }
        // if (!in_array($menu, $_SESSION['cart'])) {
        // }

        // print_r($_POST['menu']);



        //check if product is already in the cart
        if (!in_array($_POST['menu'], $_SESSION['cart'])) {
            array_push($_SESSION['cart'], $_POST['menu']);
            array_push($_SESSION['harga'], $_POST['harga']);
            $keyHarga = array_search($_POST['harga'], $_SESSION['harga']);
            $_SESSION['total_harga'] = $_SESSION['total_harga'] + $_SESSION['harga'][$keyHarga];
            print_r($_SESSION['total_harga']);
            $_SESSION['message'] = 'Product added to cart';
        } else {
            $_SESSION['message'] = 'Product already in cart';
        }
    }


    public function remove_item()
    {
        $keyHarga = array_search($_POST['harga'], $_SESSION['harga']);
        print_r($_SESSION['harga'][$keyHarga]);
        $_SESSION['total_harga'] = $_SESSION['total_harga'] - $_SESSION['harga'][$keyHarga];
        unset($_SESSION['harga'][$keyHarga]);

        //remove the id from our cart array
        $key = array_search($_POST['menu'], $_SESSION['cart']);
        unset($_SESSION['cart'][$key]);

        $_SESSION['message'] = "Product deleted from cart";
    }

    public function set_session()
    {
        print_r($_POST);
        // session()->set('qty', $_POST['qty']);
    }
}
