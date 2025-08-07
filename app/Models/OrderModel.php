<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table            = 'orders';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [ 'no_resi' ,'nama', 'paket_id', 'berat', 'alamat','kelurahan','provinsi', 'total_bayar','status'];

}
