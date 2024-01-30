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
    $queryPrevios = $db->query("SELECT * FROM previos");
    $queryPersona = $db->query("SELECT * FROM persona WHERE codigo = $codigo");

    
    $resultadoNotas = $queryNotas->getResultArray();
    $resultadoPrevios = $queryPrevios->getResultArray();
    $resultadoPersona = $queryPersona->getResultArray();


    $datos = [
      "notas" => $resultadoNotas,
      "previos" => $resultadoPrevios,
      "estudiante" => $resultadoPersona
    ];

    return view('notas/notasAlumno', $datos);

  }


  public function ingresar_nota($codigo = null){

    $db = \Config\Database::connect();
    
    $queryNotas = $db->query("SELECT * FROM nota WHERE codigo = $codigo");



  }
}