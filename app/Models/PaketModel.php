<?php
namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'paket';
    protected $allowedFields = [
        'nama', 'harga', 'minimal_berat', 'estimasi', 'pengemasan', 'asuransi'
    ];
}
