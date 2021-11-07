<?php

namespace App\Controllers;

use App\Models\JurusanModel;

class Home extends BaseController
{
    public function index($slug = false)
    {
        $data['fakultas'] = $this->fk->getFk();
        // return view('dump', $data);
        return view('home/index', $data);
    }

    public function ci4()
    {
        return view('welcome_message');
    }
}
