<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Nota;

class Notas extends Controller 
{
  public function listar_notas(){

    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM nota ");

    $resultado = $query->getResultArray();

    $datos = ["notas" => $resultado];

    return view('Notas', $datos);
  }
}