<?php 
namespace App\Models;

use CodeIgniter\Model;

class Nota extends Model{
    protected $table      = 'nota';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'nota';
    protected $allowFields = ['codigo','codigo_materia','nota','tipo_previo','fecha_insert'];
}