<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Category extends BaseController
{
    public function index()
    {
        $data = [
            'id' => $this->categoryModel->generateIdKategori(),
            'categories' => $this->categoryModel->fetchDataCategory()
        ];

        return view('pages/admin/category', $data);
    }

    public function getDataCategory()
    {
        echo json_encode($this->categoryModel->fetchDataCategory($_POST['id']));
    }

    public function save()
    {
        if ($this->request->isAJAX()) {

            $validation =  \Config\Services::validation();

            $valid = $this->validate([
                'namakategori' => [
                    'label'     => 'Nama Kategori',
                    'rules'    => 'required',
                    'errors'    => [
                        'required' => 'Kolom {field} tidak boleh kosong'
                    ]
                ]
            ]);

            if (!$valid) {

                $msg = [
                    'error' => [
                        'namakategori' => $validation->getError('namakategori')
                    ]
                ];
            } else {
                $this->categoryModel->insert([
                    'Id_Kategori'   => $this->request->getVar('kategori'),
                    'Nama_Kategori' => $this->request->getVar('namakategori')
                ]);

                $msg = [
                    'success' => 'berhasil'
                ];
            }
            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function update($id)
    {
        $this->categoryModel->update($id, [
            'Nama_Kategori' => $this->request->getVar('namakategori')
        ]);

        return redirect()->to('/category');
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);

        return redirect()->to('/category');
    }
}
