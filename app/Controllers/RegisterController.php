<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages/v_register');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

    $rules = [
    'username'         => 'required|min_length[3]|is_unique[user.username]',
    'email'            => 'required|valid_email|is_unique[user.email]',
    'password'         => 'required|min_length[6]',
    'confirm_password' => 'required|matches[password]',
    'agree'            => 'required'
    ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('register'))->withInput()->with('error', $validation->listErrors());
        }

        $userModel = new UserModel();
        $userModel->save([
            'username'   => $this->request->getPost('username'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'       => 'customer', // Set default role langsung di sini
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(base_url('login'))->with('success', 'Registrasi berhasil! Silakan login.');
    }
}