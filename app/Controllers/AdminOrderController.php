<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PaketModel;

class AdminOrderController extends BaseController
{
    protected $orderModel;
    protected $paketModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->paketModel = new PaketModel();
    }

    public function index()
    {
        $orders = $this->orderModel
                    ->select('orders.*, paket.nama AS nama_paket')
                    ->join('paket', 'paket.id = orders.paket_id')
                    ->findAll();

        return view('admin/v_kelola_order', ['orders' => $orders]);
    }

    public function delete($id)
    {
        $this->orderModel->delete($id);
        return redirect()->to(base_url('/admin/order'))->with('success', 'Pesanan berhasil dihapus.');
    }
    
    public function confirm($id)
{
    $model = new \App\Models\OrderModel();
    $order = $model->find($id);

    if ($order) {
        $model->update($id, ['status' => 'kirim']);
        return redirect()->back()->with('success', 'Pesanan telah dikonfirmasi untuk dikirim.');
    }

    return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
}

}
