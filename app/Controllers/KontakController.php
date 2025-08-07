<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\KontakModel;

class KontakController extends BaseController
{
    public function index()
    {
        return view('pages/v_kontak');
    }

     public function simpan()
    {
        $kontakModel = new KontakModel();

        $kontakModel->save([
            'nama'      => $this->request->getPost('nama'),
            'email'     => $this->request->getPost('email'),
            'telepon'   => $this->request->getPost('telepon'),
            'kategori'  => $this->request->getPost('kategori'),
            'pesan'     => $this->request->getPost('pesan'),
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('kontak'))->with('success', 'Pesan berhasil dikirim!');
    }
}