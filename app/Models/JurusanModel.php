<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';

    public function getProdi($GroupField = false)
    {
        $prodi = $this->findAll();
        if ($GroupField != false) {
            $arr = [];
            foreach ($prodi as $val) {
                $k = $val[$GroupField];
                unset($val[$GroupField]);
                $arr[$k][] = $val;
            }
            $prodi = $arr;
        }
        return $prodi;
    }
}
