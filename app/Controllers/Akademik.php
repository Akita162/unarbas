<?php

namespace App\Controllers;

class Akademik extends BaseController
{
    public function __construct()
    {
        $this->prodi = new \App\Models\JurusanModel();
    }

    public function index()
    {
        $data['fakultas'] = $this->fk->getFk();
        return view('akademik/index', $data);
    }

    public function list($fakultas)
    {
        return $fakultas;
    }
}
