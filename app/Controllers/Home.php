<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos['nombre'] = "Fermin";
        return view('welcome_message', $datos);
    }
}
