<?php 
namespace App\Models;

use CodeIgniter\Model;

class Nota extends Model{
    protected $table      = 'nota';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_nota';
    protected $allowFields = ['id_nota','codigo','codigo_materia','nota','tipo_previo','fecha_insert'];
}