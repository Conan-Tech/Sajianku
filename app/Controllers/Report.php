<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Report extends BaseController
{
    public function index()
    {
        $filter = $this->request->getVar('cari');

        $data = [
            'orders' => $this->orderModel->fetchDataOrderByDate(),
        ];

        if ($filter) {
            $tgl1 = $this->request->getVar('tgl1');
            $tgl2 = $this->request->getVar('tgl2');

            $data = [
                'orders' => $this->orderModel->fetchDataOrderByDate($tgl1, $tgl2),
                'tgl1'  => $tgl1 = $this->request->getVar('tgl1'),
                'tgl2'  => $tgl1 = $this->request->getVar('tgl2'),
            ];
        }
        return view('pages/kasir/report', $data);
    }

    public function getDataOrder()
    {
        echo json_encode($this->orderModel->fetchJoinDataOrder($_POST['id']));
    }
}
