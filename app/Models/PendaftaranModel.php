<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';

    public function daftar($data = null)
    {
        $this->save($data);
    }
}
