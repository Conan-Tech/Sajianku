<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class ManageorderPelayan extends BaseController
{
    public function index()
    {
        $data = [
            'orders' => $this->orderModel->fetchDataOrderByStatus(1),
        ];
        return view('pages/pelayan/manageorder', $data);
    }

    public function getDataManageorders()
    {
        echo json_encode($this->orderModel->fetchOrderJoin($_POST['id']));
    }
}
