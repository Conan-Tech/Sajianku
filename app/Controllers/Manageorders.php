<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Manageorders extends BaseController
{
    public function index()
    {
        $data = [
            'manageorders' => $this->manageordersModel->fetchDataManageorders(),
        ];
        return view('pages/koki/manageorders', $data);
    }
}
