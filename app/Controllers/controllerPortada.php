<?php

namespace App\Controllers;

class ControllerInvestigadores extends BaseController
{
    public function index()
    {
        return view('portada/cabecera').
                view('listado_investigadores').
                view('portada/pie');
    }
}
