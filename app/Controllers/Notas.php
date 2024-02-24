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


  public function notas_estudiante($codigo = null ,$codigo_materia = null ){

    $db = \Config\Database::connect();

    $queryNotas = $db->query("SELECT * FROM nota where codigo = '".$codigo."' ");

    $queryPrevios = $db->query("SELECT * FROM previos");

    $queryPersona = $db->query("SELECT * FROM persona WHERE codigo = $codigo");

    $queryMaterias = $db->query("SELECT * FROM materia m, semestre s where m.codigo_materia = s.codigo_materia and s.codigo = '".$codigo."'");

    $resultadoNotas = $queryNotas->getResultArray();
    $resultadoPrevios = $queryPrevios->getResultArray();
    $resultadoPersona = $queryPersona->getResultArray();
    $resultadoMaterias = $queryMaterias->getResultArray();

    $datos = [
      "notas" => $resultadoNotas,
      "previos" => $resultadoPrevios,
      "estudiante" => $resultadoPersona,
      "materias" => $resultadoMaterias
    ];

    // $notaPromedio =  ($nota['nota'] * $previo['porcentaje']) / 100 ;echo $notaPromedio;

    return view('notas/notasAlumno', $datos);

  }


  public function ingresar_nota($codigo = null){

    $db = \Config\Database::connect();
    
    $queryPersona = $db->query("SELECT * FROM persona WHERE codigo = $codigo");
    $queryPrevios = $db->query("SELECT * FROM previos");
    $queryNotas = $db->query("SELECT * FROM nota");
    $queryMateria = $db->query("SELECT * FROM materia m, semestre s where m.codigo_materia = s.codigo_materia and s.codigo = '".$codigo."'");

    $resultadoNotas = $queryNotas->getResultArray();
    $resultadoPrevios = $queryPrevios->getResultArray();
    $resultadoPersona = $queryPersona->getResultArray();
    $resultadoMaterias = $queryMateria->getResultArray();
    

    $datos = [
      "notas" => $resultadoNotas,
      "datos" => $resultadoMaterias,
      "previos" => $resultadoPrevios,
      "persona" => $resultadoPersona
    ];

    return view("notas/insertNotas" , $datos);

  }

  public function guardar_nota($codigo = null){

    $db = \Config\Database::connect();

    $CODIGO = $this->request->getVar('codigo');
    $CODIGO_MATERIA = $this->request->getVar('codigo_materia');
    $TIPO_PREVIO = $this->request->getVar('tipo_previo');
    $NOTA = $this->request->getVar('nota');


    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=OFF");

    $query = $db->query("INSERT INTO nota (codigo, codigo_materia, nota, tipo_previo, fecha_insert) VALUES ('" . $CODIGO . "','" . $CODIGO_MATERIA . "','" . $NOTA . "','" . $TIPO_PREVIO . "',' TIMESTAMP() ')");

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=ON");

    return $this->response->redirect(site_url('notas'));

  }
}
