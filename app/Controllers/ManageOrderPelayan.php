<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Manageorders extends BaseController
{
    public function index()
    {
        $data = [
            'orders' => $this->manageordersModel->fetchDataManageorders(),
        ];
        return view('pages/koki/manageorders', $data);
    }

    public function getDataManageorders()
    {
        echo json_encode($this->manageordersModel->fetchJoinManageorders($_POST['id']));
    }
}
