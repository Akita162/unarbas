<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';

    public function getJurusan($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['fakultas_id' => $slug])->first();
    }
}
