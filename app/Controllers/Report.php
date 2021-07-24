<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Report extends BaseController
{
    public function index()
    {
        $data = [
            'report' => $this->reportModel->fetchDataReport(),
        ];
        return view('pages/kasir/report', $data);
    }

    public function getDataReport()
    {
        // echo json_encode($this->reportModel->fetchDataReport($_POST['id']));
    }
}
