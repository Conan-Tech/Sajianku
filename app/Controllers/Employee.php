<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Employee extends BaseController
{
    public function index()
    {
        $data = [
            'employees' => $this->employeeModel->fetchDataEmployee(),
        ];
        return view('pages/admin/employee', $data);
    }

    public function getDataEmployee()
    {
        echo json_encode($this->employeeModel->fetchDataEmployee($_POST['id']));
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $validation =  \Config\Services::validation();

            $valid = $this->validate([
                'id' => [
                    'label'     => 'Id Pegawai',
                    'rules'     => 'required|is_unique[pegawai.Id_Pegawai]',
                    'errors'    => [
                        'required'  => 'Kolom {field} tidak boleh kosong',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ],

                'nama' => [
                    'label'     => 'Nama Pegawai',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => 'Kolom {field} tidak boleh kosong'
                    ]
                ],

                'jabatan' => [
                    'label'     => 'Jabatan',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => 'Kolom {field} tidak boleh kosong'
                    ]
                ],

                'username' => [
                    'label'     => 'Username',
                    'rules'     => 'required|is_unique[pegawai.Username]',
                    'errors'    => [
                        'required'  => 'Kolom {field} tidak boleh kosong',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ],

                'password' => [
                    'label'     => 'Password',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => 'Kolom {field} tidak boleh kosong'
                    ]
                ]

            ]);

            if (!$valid) {

                $msg = [
                    'error' => [
                        'idPegawai' => $validation->getError('id'),
                        'nama'      => $validation->getError('nama'),
                        'jabatan'   => $validation->getError('jabatan'),
                        'username'  => $validation->getError('username'),
                        'password'  => $validation->getError('password')
                    ]
                ];
            } else {
                $this->employeeModel->insert([
                    'Id_Pegawai'    => $this->request->getVar('id'),
                    'Nama_Pegawai'  => $this->request->getVar('nama'),
                    'Jabatan'       => $this->request->getVar('jabatan'),
                    'Username'      => $this->request->getVar('username'),
                    'Password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
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
        if ($this->request->getVar('password') == '') {

            $dataEmployee = $this->employeeModel->fetchDataEmployee($id);

            $this->employeeModel->update($id, [
                'Nama_Pegawai'  => $this->request->getVar('nama'),
                'Jabatan'       => $this->request->getVar('jabatan'),
                'Username'      => $this->request->getVar('username'),
                'Password'      => $dataEmployee['Password'],
            ]);
        } else {
            $this->employeeModel->update($id, [
                'Nama_Pegawai'  => $this->request->getVar('nama'),
                'Jabatan'       => $this->request->getVar('jabatan'),
                'Username'      => $this->request->getVar('username'),
                'Password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);
        }

        return redirect()->to('/admin/employee');
    }

    public function delete($id)
    {
        $this->employeeModel->delete($id);

        return redirect()->to('/admin/employee');
    }
}
