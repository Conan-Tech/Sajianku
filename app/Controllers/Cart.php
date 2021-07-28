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

        //check if product is already in the cart
        if (!in_array($_POST['menu'], $_SESSION['cart'])) {
            array_push($_SESSION['cart'], $_POST['menu']);
            $_SESSION['message'] = 'Product added to cart';
        } else {
            $_SESSION['message'] = 'Product already in cart';
        }
    }

    public function remove_item()
    {
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
