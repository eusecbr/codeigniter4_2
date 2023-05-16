<?php

namespace App\Controllers;

class ControllerPortada extends BaseController
{
    public function index()
    {
        return  view('portada/cabecera').
                view('portada_cuerpo').
                view('portada/pie');
    }


}
