<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterPelayan implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('jabatan') == "") {
            session()->setFlashdata('error', 'Anda belum login! , silahkan login terlebih dahulu!');
            return redirect()->to(site_url('/'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('jabatan') == "Pelayan") {
            return redirect()->to(site_url('/dashboard'));
        }
    }
}
