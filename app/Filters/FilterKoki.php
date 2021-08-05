<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterKoki implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('jabatan') == "") {
            session()->setFlashdata('error', 'Anda belum login! , silahkan login terlebih dahulu!');
            return redirect()->to(site_url('/auth'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('jabatan') == "Koki") {
            return redirect()->to(site_url('/dashboard'));
        }
    }
}
