<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PaketModel;
use CodeIgniter\Controller;
use GuzzleHttp\Client;

class CheckoutController extends BaseController
{
    protected $orderModel;
    protected $paketModel;
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->paketModel = new PaketModel();
        $this->client = new Client();
        $this->apiKey = env('COST_KEY'); // pastikan COST_KEY ada di .env
        helper(['form', 'url', 'number']);
    }

    public function index()
    {
        $paket = $this->paketModel->findAll();

        return view('pages/v_checkout', [
            'paket' => $paket
        ]);
    }

    public function getLocation()
    {
        $search = $this->request->getGet('search');

        $response = $this->client->request(
            'GET',
            'https://rajaongkir.komerce.id/api/v1/destination/domestic-destination?search=' . $search . '&limit=50',
            [
                'headers' => [
                    'accept' => 'application/json',
                    'key' => $this->apiKey,
                ],
            ]
        );

        $body = json_decode($response->getBody(), true);
        return $this->response->setJSON($body['data']);
    }

    public function getCost()
    {
        $destination = $this->request->getGet('destination');

        $response = $this->client->request(
            'POST',
            'https://rajaongkir.komerce.id/api/v1/calculate/domestic-cost',
            [
                'multipart' => [
                    [
                        'name' => 'origin',
                        'contents' => '64999', // PEDURUNGAN TENGAH
                    ],
                    [
                        'name' => 'destination',
                        'contents' => $destination,
                    ],
                    [
                        'name' => 'weight',
                        'contents' => '1000',
                    ],
                    [
                        'name' => 'courier',
                        'contents' => 'jne',
                    ],
                ],
                'headers' => [
                    'accept' => 'application/json',
                    'key' => $this->apiKey,
                ],
            ]
        );

        $body = json_decode($response->getBody(), true);
        return $this->response->setJSON($body['data']);
    }

    public function save()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama'     => 'required',
            'paket'    => 'required|numeric',
            'berat'    => 'required|numeric',
            'alamat'   => 'required',
            'kelurahan' => 'required',
            'provinsi' => 'required',
            'total'    => 'required|numeric'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Generate nomor resi otomatis (contoh format: NAPE + random 9 angka)
        $noResi = 'NAPE' . rand(100000000, 999999999);
        $userId = session()->get('user_id');

        // Simpan data ke database
        $this->orderModel->insert([
            'user_id'     => $userId,
            'no_resi'     => $noResi,
            'nama'        => $this->request->getPost('nama'),
            'paket_id'    => $this->request->getPost('paket'),
            'berat'       => $this->request->getPost('berat'),
            'alamat'      => $this->request->getPost('alamat'),
            'kelurahan'   => $this->request->getPost('kelurahan'),
            'provinsi'    => $this->request->getPost('provinsi'),
            'total_bayar' => $this->request->getPost('total'),
            'status'      => 'pending', // status awal
]);


        return redirect()->to(base_url('tarif'))->with('success', 'Pesanan berhasil disimpan! Tunggu konfirmasi dari admin, Ini Resi Anda Mohon Di Simpan Dengan Baik: ' . $noResi,);
    }
}
