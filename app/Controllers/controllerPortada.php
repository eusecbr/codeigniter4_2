<?php

namespace App\Controllers;

class ControllerInvestigadores extends BaseController
{
    public function index()
    {
        return view('portada/cabecera.php').
                view('listado_investigadores').
                view('portada/pie.php');
    }
}
