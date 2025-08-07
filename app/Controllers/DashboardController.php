<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KontakModel;
use App\Models\OrderModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $kontakModel = new KontakModel();
        $orderModel = new OrderModel();

        $jumlahPesan = $kontakModel->countAllResults();
        $jumlahOrder = $orderModel->countAllResults();

        return view('admin/v_dashboard', [
            'jumlahPesan' => $jumlahPesan,
            'jumlahOrder' => $jumlahOrder
        ]);
    }
}
