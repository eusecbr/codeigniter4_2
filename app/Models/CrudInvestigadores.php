<?php

namespace App\Models;
use CodeIgniter\Model;
class CrudInvestigadores extends Model{
    //Table
    protected $table = 'investigadores';
    //allowed fields
    protected $allowedFields = ['DNI', 'NomInvestigador', 'ApellInvestigador', 'IdFacultad'];
}
