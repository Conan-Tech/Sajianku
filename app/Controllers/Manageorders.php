<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Manageorders extends BaseController
{
    public function index()
    {
        $data = [
            'orders' => $this->orderModel->fetchDataOrderByStatus(),
        ];
        return view('pages/koki/manageorders', $data);
    }

    public function getDataManageorders()
    {
        echo json_encode($this->orderModel->fetchOrderJoin($_POST['id']));
    }

    public function updateReady($id)
    {
        $this->orderModel->update($id, [
            'Status_Order'  => 1,
        ]);

        return redirect()->to('/koki/manageorder');
    }
}
