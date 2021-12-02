<?php

namespace App\Controllers;

class Akademik extends BaseController
{
    public function index()
    {
        $data['fakultas'] = $this->fk->getFk();
        $data['jurusan'] = $this->prodi->getProdi('kode_fk');
        return view('akademik', $data);
    }
}
