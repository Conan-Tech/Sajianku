<?php

namespace App\Controllers;

class MenuAdmin extends BaseController
{
    public function index()
    {
        $data = [
            'menus' => $this->menusModel->fetchDataMenus(),
        ];
        return view('pages/admin/menu', $data);
    }

    public function getDataMenus()
    {
        echo json_encode($this->menusModel->fetchDataMenus($_POST['id']));
    }


    public function updateAvailable($id)
    {
        $this->menusModel->update($id, [
            'Status_Ketersediaan'  => 1,
        ]);

        return redirect()->to('/admin/menu');
    }

    public function updateNotAvailable($id)
    {
        $this->menusModel->update($id, [
            'Status_Ketersediaan'  => 0,
        ]);

        return redirect()->to('/admin/menu');
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'kode' => [
                    'label'     => 'Kode Menu',
                    'rules'     => 'required',
                    'errors'    => [
                        'required' => 'kolom {field} tidak boleh kosong',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ],
                'namamenu' => [
                    'label'     => 'Nama Menu',
                    'rules'     => 'required',
                    'errors'    => [
                        'required' => 'kolom {field} tidak boleh kosong',
                         'is_unique' => '{field} sudah terdaftar',
                    ]
                ],
                'harga' => [
                    'label'     => 'harga',
                    'rules'     => 'required',
                    'errors'    => [
                        'required' => 'kolom {field} tidak boleh kosong',
                    ]
                ],
                'kategori' => [
                    'label'     => 'kategori',
                    'rules'     => 'required',
                    'errors'    => [
                        'required' => 'kolom {field} tidak boleh kosong',
                    ]
                    ],
                'sampul' => 'uloaded[sampul]'
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'kodemenu' => $validation->getError('kode'),
                        'namamenu' => $validation->getError('namamenu'),
                        'harga'    => $validation->getError('harga'),
                        'kategori'    => $validation->getError('kategori')
                    ]
                ];
            } else {
                $this->menusModel->insert([
                    'Id_Menu' => $this->request->getVar('kode'),
                    'Nama_Menu' => $this->request->getVar('namamenu'),
                    'Harga' => $this->request->getVar('Harga')
                ]);

                $msg = [
                    'success' => 'Berhasil'
                ];
            }

            echo json_encode($msg);
        } else {
            exit('Maaf Tidak Dapat Diproses');
        }
    }

    public function update($id)
    {
        $this->menusModel->update($id, [
            'Kode_Menu' => $this->request->getVar('kode'),
            'Nama_Menu' => $this->request->getVar('namamenu'),
            'Harga' => $this->request->getVar('harga')
        ]);
        return redirect()->to('/admin/menu');
    }

    public function delete($id)
    {
        $this->menusModel->delete($id);

        return redirect()->to('/admin/menu');
    }
}
