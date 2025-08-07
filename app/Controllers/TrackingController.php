<?php

namespace App\Controllers;
use App\Models\OrderModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TrackingController extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

public function index()
{
    $noResi = $this->request->getGet('no_resi');

    if ($noResi) {
        $order = $this->orderModel->where('no_resi', $noResi)->first();
        if ($order) {
            return view('pages/v_tracking', [
                'order' => $order,
                'searched' => true
            ]);
        } else {
            // Redirect jika tidak ditemukan, bawa flashdata
            return redirect()->to(base_url('tracking'))->with('error', 'Nomor resi tidak ditemukan.');
        }
    }

    return view('pages/v_tracking');
}

}