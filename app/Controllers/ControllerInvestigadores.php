<?php

namespace App\Controllers;

use App\Models\CrudInvestigadores;

class ControllerInvestigadores extends BaseController
{
    //session
    protected $sessionId;
    //data
    protected $data;
    //model
    protected $crud_inves;

    //initialize Object
    public function __construct()
    {
        $this->crud_inves = new CrudInvestigadores();
        $this->session= \Config\Services::session();
        $this->data ['session']= $this->session;
    }

    public function list(){
        $this->data['page_title'] = "LISTA INVESTIGADORES";
        $this->data['list'] = $this->crud_inves->orderBy('DNI ASC')
        ->select('*')->get()->getResult();
        
        echo view('portada/cabecera');
        echo view('listado_investigadores', $this->data);
        echo view('portada/pie');
    }

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
