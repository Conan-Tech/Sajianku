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
}
