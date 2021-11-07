<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends Model
{
    protected $table = 'fakultas';

    public function getFk()
    {
        return $this->findAll();
    }
}
