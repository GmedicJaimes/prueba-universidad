<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Nota;
use App\Models\Persona;

class Notas extends Controller 
{
  public function seleccionar_estudiante(){

    $db = \Config\Database::connect();

    $queryPersona = $db->query("SELECT * FROM persona");

    $resultadoPersona = $queryPersona->getResultArray();

    $datos = ["estudiantes" => $resultadoPersona];

    return view('Notas', $datos);
  }


  public function notas_estudiante($codigo = null){

    $db = \Config\Database::connect();
    
    $queryNotas = $db->query("SELECT * FROM nota WHERE codigo = $codigo");

    $resultadoNotas = $queryNotas->getResultArray();

    $datos = ["notas" => $resultadoNotas];

    return view('notas/notasAlumno', $datos);

  }
}