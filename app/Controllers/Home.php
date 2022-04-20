<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['fakultas'] = $this->fk->getFk();
        // return view('dump');
        return view('home', $data);
    }

    public function ci4()
    {
        return view('welcome_message');
    }
}
