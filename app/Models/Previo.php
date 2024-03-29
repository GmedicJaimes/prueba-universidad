<?php 
namespace App\Models;

use CodeIgniter\Model;

class Previo extends Model{
    protected $table      = 'previos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'tipo_previo';
    protected $useAutoIncrement = true;
    
    protected $returnType     = 'array';

    protected $allowFields = ['tipo_previo','porcentaje'];
}