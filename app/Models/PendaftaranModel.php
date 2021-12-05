<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftar';

    public function daftar($data = null)
    {
        return $this->save($data);
    }

    public function getRegId($nisn)
    {
        return $this->db->table('pendaftar')->getWhere(['nisn' => $nisn])->getLastRow('array');
    }
}
