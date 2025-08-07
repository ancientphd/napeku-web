<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KontakModel;

class AdminKelolaPesanController extends BaseController
{
    protected $kontakModel;

    public function __construct()
    {
        $this->kontakModel = new KontakModel();
    }

    public function index()
    {
        $data['pesan'] = $this->kontakModel->orderBy('created_at', 'DESC')->findAll();
        return view('admin/v_kelola_pesan', $data);
    }

    public function delete($id)
    {
        if ($this->kontakModel->find($id)) {
            $this->kontakModel->delete($id);
            return redirect()->to(base_url('admin/pesan'))->with('success', 'Pesan berhasil dihapus.');
        }

        return redirect()->to(base_url('admin/pesan'))->with('error', 'Pesan tidak ditemukan.');
    }
}
