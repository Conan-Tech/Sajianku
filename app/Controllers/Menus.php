<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Menus extends BaseController
{
    public function index()
    {
        $data = [
            'menus' => $this->menusModel->fetchDataMenus(),
        ];
        return view('pages/koki/menus', $data);
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

        return redirect()->to('/koki/menu');
    }

    public function updateNotAvailable($id)
    {
        $this->menusModel->update($id, [
            'Status_Ketersediaan'  => 0,
        ]);

        return redirect()->to('/koki/menu');
    }
}
