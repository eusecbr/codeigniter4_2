<?php

namespace App\Controllers;

class ControllerInvestigadores extends BaseController
{
    public function index()
    {
        return view('portada/cabecera').
                view('investigadores/listado_investigadores').
                view('portada/pie');
    }

    public function add()
    {
        return view('portada/cabecera').
                view('investigadores/add_investigadores').
                view('portada/pie');
    }
}
