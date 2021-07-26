<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function index()
    {
        $data = [
            'foods'     => $this->menusModel->fetchDataMenusByCategories("Makanan"),
            'drinks'    => $this->menusModel->fetchDataMenusByCategories('Minuman')
        ];

        return view('pages/pelayan/order', $data);
    }
}
