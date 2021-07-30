<?php

namespace App\Controllers;

class MenuAdmin extends BaseController
{
    public function index()
    {
        $data = [
            'menus'         => $this->menusModel->fetchDataMenus(),
            'categories'    => $this->categoryModel->fetchDataCategory(),
            'id'            => $this->menusModel->generateIdMenu()
        ];
        return view('pages/admin/menu', $data);
    }

    public function getDataMenus()
    {
        echo json_encode($this->menusModel->fetchJoinDataMenus($_POST['id']));
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
                    'rules'     => 'required|is_unique[menu.Id_Menu]',
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
                'sampul' => [
                    'rules' => 'uploaded[sampul]|max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jepeg,image/png]',
                    'errors' => [
                        'uploaded' => 'pilih gambar menu',
                        'max_size' => 'Ukuran terlalu besar maskismal 1 MB',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mine_in'  => 'Yang anda pilih bukan gambar'
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'kodemenu' => $validation->getError('kode'),
                        'namamenu' => $validation->getError('namamenu'),
                        'harga'    => $validation->getError('harga'),
                        'kategori' => $validation->getError('kategori'),
                        'sampul'   => $validation->getError('sampul')
                    ]
                ];
            } else {
                // //ambil gambar
                $fileSampul = $this->request->getFile('sampul');

                //buat nama file menjadi random
                $filename = $fileSampul->getRandomName();

                $this->menusModel->insert([
                    'Id_Menu' => $this->request->getVar('kode'),
                    'Nama_Menu' => $this->request->getVar('namamenu'),
                    'Harga' => $this->request->getVar('harga'),
                    'Id_Kategori' => $this->request->getVar('kategori'),
                    'Photo' => $filename
                ]);
                

                //pindahkan file foto
                $fileSampul->move('Assets/images', $filename);

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
          $datamenus = $this->menusModel->fetchDataMenus($id);

          $old = $datamenus['Photo'];

        if( $this->request->getFile('sampul') == ''){
            

            $this->menusModel->update($id, [
            'Nama_Menu' => $this->request->getVar('namamenu'),
            'Harga' => $this->request->getVar('harga'),
            'Id_Kategori' => $this->request->getVar('kategori'),
            'Photo' => $datamenus['Photo'],
        ]);
        } else {
           
                $fileSampul = $this->request->getFile('sampul');

                $filename = $fileSampul->getRandomName();
                    $this->menusModel->update($id, [
                    'Nama_Menu' => $this->request->getVar('namamenu'),
                    'Harga' => $this->request->getVar('harga'),
                    'Id_Kategori' => $this->request->getVar('kategori'),
                    'Photo' => $filename
                ]);
                 //pindahkan file foto
                $fileSampul->move('Assets/images', $filename);

                $path = base_url('Assets').'/images'.$old;

                $msg = [
                    'success' => 'Berhasil'
                ];
        }
        return redirect()->to('/admin/menu');
    }

    public function delete($id)
    {
        $this->menusModel->delete($id);

        return redirect()->to('/admin/menu');
    }
}
