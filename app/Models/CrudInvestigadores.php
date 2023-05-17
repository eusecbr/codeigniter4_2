<?php

namespace App\Models;
use CodeIgniter\Model;
class CrudInvestigadores extends Model{
    protected $table = 'investigadores';
    protected $allowedFields = ['DNI', 'NomInestigadores', 'ApellInvestigador', 'IdFacultad'];
}
