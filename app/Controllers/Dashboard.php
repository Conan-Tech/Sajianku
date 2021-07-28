<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => $this->menusModel->countMenu(),
            'order'     => $this->orderModel->countOrderByDate(),
            'revenue'   => $this->orderModel->countRevenueByDate(),
            'complete'  => $this->orderModel->countOrderByStatus(1),
            'new'       => $this->orderModel->countOrderByStatus(0),
            'transaction'  => $this->orderModel->countOrderByStatus(0),
        ];

        return view('pages/dashboard/dashboard', $data);
    }
}
