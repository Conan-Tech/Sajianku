<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Report extends BaseController
{
    public function index()
    {
        $data = [
            'orders' => $this->orderModel->fetchDataOrder(),
        ];
        return view('pages/kasir/report', $data);
    }

    public function getDataOrder()
    {
        // echo json_encode($this->reportModel->fetchDataReport($_POST['id']));
    }
}
