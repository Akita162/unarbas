<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function ci4()
    {
        return view('welcome_message');
    }
}
