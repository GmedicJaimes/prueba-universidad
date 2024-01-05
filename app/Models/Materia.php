<?php 
namespace App\Models;

use CodeIgniter\Model;

class Materia extends Model{
    protected $table      = 'materia';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo_materia';
    protected $allowFields = ['codigo_materia','nombre','grupo'];
}