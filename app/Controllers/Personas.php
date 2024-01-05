<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Persona;

class Personas extends Controller
{

  //* mostrar alumnos
  public function listar_alumnos(){

    //?conexion a la base de datos
    $db = \Config\Database::connect();
    
    //? realizamos la consulta a nuestra base de datos
    $query = $db->query("SELECT * FROM persona ");
  
    //?nos trae los registros mediante objetos
    // $resultado = $query->getResult();

    //? de la siguiente manera lo pasamos como un arreglo
    $resultado = $query->getResultArray();

    $datos = ['alumnos' => $resultado];

    return view('alumnos', $datos);
  }

  //* crear alumnos

  public function crear_alumno(){
  
    return view('alumnos/crearAlumnos');

  }

  public function guardar_alumno(){

    $db = \Config\Database::connect();

    $CODIGO = $this->request->getVar('codigo');
    $DOCUMENTO = $this->request->getVar('documento');
    $NOMBRES = $this->request->getVar('nombres');
    
    $query = $db->query("INSERT INTO persona (codigo,documento,nombres) VALUES ('". $CODIGO ."','". $DOCUMENTO ."','". $NOMBRES ."')");

    return $this->response->redirect(site_url('/alumnos'));
  }


  //* editar alumnos

  public function editar_alumnos($codigo = null){

    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM persona WHERE codigo = $codigo");

    $resultado = $query->getResultArray();

    $datos = ['alumnos' => $resultado];

    return view('alumnos/editarAlumnos' , $datos);
  }


  public function actualizar_alumnos(){
    $db = \Config\Database::connect();

    $CODIGO = $this->request->getVar('codigo');
    $DOCUMENTO = $this->request->getVar('documento');
    $NOMBRES = $this->request->getVar('nombres');

    $ID = $this->request->getVar('id');

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=OFF");

    $query = $db->query("UPDATE persona SET codigo = '" . $CODIGO . "', documento = '" . $DOCUMENTO . "', nombres = '". $NOMBRES . "' WHERE codigo = '" . $ID . "'");

    $QUERY1 = $db->query("SET FOREIGN_KEY_CHECKS=ON");

    return $this->response->redirect(site_url('/alumnos'));
  }
  
  //* borrar alumnos 

  public function borrar_alumnos($codigo = null){

    $db = \Config\Database::connect();

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=OFF");
    
    $query = $db->query(" DELETE FROM persona WHERE codigo = $codigo");

    $QUERY1 = $db->query("SET FOREIGN_KEY_CHECKS=ON");
    
    return $this->response->redirect(site_url('/alumnos'));

  }
} 