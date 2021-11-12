<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';

    public function getProdi($groupBy = false)
    {
        $prodi = $this->findAll();
        if ($groupBy != false) {
            $arr = [];
            foreach ($prodi as $val) {
                $k = $val[$groupBy];
                unset($val[$groupBy]);
                $arr[$k][] = $val;
            }
            $prodi = $arr;
        }
        return $prodi;
    }
}
