<?php

namespace App\Controllers;

use App\Models\PaketModel;

class TarifController extends BaseController
{
    public function index()
    {
        $model = new PaketModel();
        $data['pakets'] = $model->findAll();

        return view('pages/v_tarif', $data);
    }
    
}
