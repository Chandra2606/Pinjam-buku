<?php

namespace App\Models;

use CodeIgniter\Model;

class Mbuku extends Model
{
    protected $table = 'pinjam';
    protected $primaryKey = 'kdpinjam';
    protected $allowedFields = ['kdpinjam', 'nama', 'judul', 'harga', 'jumlah', 'denda', 'total'];
    protected $session;
}
