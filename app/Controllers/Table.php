<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Table extends BaseController
{
    public function index()
    {
        $data = [
            'tables'    => $this->tableModel->fetchDataTable(),
        ];
        return view('pages/admin/table', $data);
    }

    public function getDataTable()
    {
        echo json_encode($this->tableModel->fetchDataTable($_POST['id']));
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $validation =  \Config\Services::validation();

            $valid = $this->validate([
                'meja'  => [
                    'label'     => 'No Meja',
                    'rules'     => 'required|is_unique[meja.No_Meja]',
                    'errors'    => [
                        'required'  => 'Kolom {field} tidak boleh kosong',
                        'is_unique' => '{field} Sudah terdaftar'
                    ]
                ],

                'kapasitas'  => [
                    'label'     => 'Kapasitas',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => 'Kolom {field} tidak boleh kosong'
                    ]
                ]
            ]);

            if (!$valid) {

                $msg = [
                    'error' => [
                        'meja'  => $validation->getError('meja'),
                        'kapasitas'  => $validation->getError('kapasitas')
                    ]
                ];
            } else {
                // dd($this->request->getVar('kapasitas'));
                $this->tableModel->insert([
                    'No_Meja'   => $this->request->getVar('meja'),
                    'Kapasitas' => $this->request->getVar('kapasitas'),
                    'Status_Ketersediaan'   => 1
                ]);

                $msg = [
                    'success'   => 'Berhasil'
                ];
            }
            echo json_encode($msg);
        } else {
            exit('Maaf Tidak dapat diproses');
        }
    }

    public function update($id)
    {
        $this->tableModel->update($id, [
            'Kapasitas' => $this->request->getVar('kapasitas'),
        ]);

        return redirect()->to('/admin/table');
    }

    public function delete($id)
    {
        $this->tableModel->delete($id);

        return redirect()->to('/admin/table');
    }
}
