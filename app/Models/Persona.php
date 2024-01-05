<?php 
namespace App\Models;

use CodeIgniter\Model;

class Persona extends Model{
    protected $table      = 'persona';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo';
    protected $useAutoIncrement = true;
    
    protected $returnType     = 'array';
    
    protected $allowedFields = ['codigo','documento','nombres'];
    
}