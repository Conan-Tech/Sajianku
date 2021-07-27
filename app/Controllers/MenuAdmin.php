<?php

namespace App\Controllers;

class MenuAdmin extends BaseController
{
    public function index()
    {
        return view('pages/admin/menu');
    }
}
