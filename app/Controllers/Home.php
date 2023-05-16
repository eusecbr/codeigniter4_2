<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $nombre = "Fermin";
        return view('welcome_message');
    }
}
