<?php

namespace App\Controllers;

use App\Models\JurusanModel;

class Home extends BaseController
{
    public function index()
    {
        $data['fakultas'] = $this->fk->getFk();
        return view('home', $data);
    }

    public function ci4()
    {
        return view('welcome_message');
    }
}
