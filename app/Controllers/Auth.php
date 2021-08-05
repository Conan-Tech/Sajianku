<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $post = $this->request->getVar();
        $user = $this->employeeModel->fetchEmployeeByUsername($post['username']);
        if ($user) {
            if (password_verify($post['password'], $user['Password'])) {
                $params = [
                    'islogin' => true,
                    'id' => $user['Id_Pegawai'],
                    'nama' => $user['Nama_Pegawai'],
                    'jabatan' => $user['Jabatan'],
                    'username' => $user['Username']
                ];
                session()->set($params);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('islogin');
        session()->remove('id');
        session()->remove('nama');
        session()->remove('jabatan');
        session()->remove('username');
        session()->destroy();
        return redirect()->to('/auth');
    }
}
