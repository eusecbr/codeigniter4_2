<?php

namespace App\Controllers;

class ControllerPortada extends BaseController
{
    public function index()
    {
        return  view('portada/cabecera').
                view('portada/cuerpo').
                view('portada/pie');
    }


}
