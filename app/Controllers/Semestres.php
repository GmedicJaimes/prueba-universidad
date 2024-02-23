<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Semestre;
class Semestres extends Controller{

  public function mostrar_semestre(){

    $db = \Config\Database::connect();
  
    $query = $db->query("SELECT * FROM persona, materia, semestre WHERE persona.codigo = semestre.codigo AND materia.codigo_materia = semestre.codigo_materia ORDER BY persona.codigo DESC ");
  
    $resultado = $query->getResultArray();
  
    $datosMateria = ['semestres' => $resultado];
  
    return view('semestre', $datosMateria);
  }

  //* insertar materia

  public function insert_materia(){
     
    $db = \Config\Database::connect();

    $queryPersona = $db->query("SELECT codigo,nombres FROM persona");
    $resultadoPersona = $queryPersona->getResultArray();

    $queryMateria = $db->query("SELECT * FROM materia");
    $resultadoMateria = $queryMateria->getResultArray();


    $datosSemestre = [
      "personas" => $resultadoPersona,
      "materias" => $resultadoMateria
    ];

    return view("semestre/insertSemestre" , $datosSemestre);

  }


  public function guardar_semestre(){

    $db = \Config\Database::connect();

    $codigo = $this->request->getVar("codigo");
    $codigo_materia = $this->request->getVar("codigo_materia");

    $query = $db->query("INSERT INTO semestre (codigo, codigo_materia) VALUES ('". $codigo . "','". $codigo_materia . "')");


    return $this->response->redirect(site_url('/semestre'));
  }

}