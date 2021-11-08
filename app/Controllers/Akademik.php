<?php

namespace App\Controllers;

class Akademik extends BaseController
{
    public function index()
    {
        $data['fakultas'] = $this->fk->getFk();
        return view('akademik/index', $data);
    }

    public function fakultas($fakultas)
    {
        return $fakultas;
    }
}
