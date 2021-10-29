<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['css'] = ['all'];
        return view('home', $data);
    }

    public function ci4()
    {
        return view('welcome_message');
    }
}
