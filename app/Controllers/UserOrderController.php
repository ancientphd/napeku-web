<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class UserOrderController extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index()
    {
        $userId = session()->get('user_id'); // ambil ID dari session

        if (!$userId) {
            return redirect()->to(base_url('login'));
        }

        $data['orders'] = $this->orderModel->where('user_id', $userId)->findAll();

        return view('pages/v_history', $data);
    }
}
