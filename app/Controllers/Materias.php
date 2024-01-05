<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Materia;
class Materias extends Controller{


  public function listar_materia() {

    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM materia");

    $resultado = $query->getResultArray();

    $datosMateria['materias'] = $resultado;


    return view('materias', $datosMateria);

  }

  //* insertar materia

  public function ingresar_materia(){
    return view('materias/crearMaterias');
  }

  public function guardar_materia(){
    
    $db = \Config\Database::connect();

    $CODIGO_MATERIA = $this->request->getVar('codigo_materia');
    $NOMBRE = $this->request->getVar('nombre');
    $GRUPO = $this->request->getVar('grupo');

    $query = $db->query("INSERT INTO materia (codigo_materia, nombre, grupo) VALUES ('" . $CODIGO_MATERIA . "','" . $NOMBRE . "','". $GRUPO . "')");

    return $this->response->redirect(site_url('/materia'));
  }


  //* editar materia

  public function editar_materia($codigo_materia = null){

    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM materia WHERE codigo_materia = $codigo_materia");

    $resultado = $query->getResultArray();

    $datos = ['materias' => $resultado];

    return view('materias/editarMaterias', $datos);
  }

  public function actualizar_materia(){  

    $db = \Config\Database::connect();

    $CODIGO_MATERIA = $this->request->getVar('codigo_materia');
    $NOMBRE = $this->request->getVar('nombre');
    $GRUPO = $this->request->getVar('grupo');

    $ID = $this->request->getVar('id');

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=OFF");

    $query = $db->query("UPDATE materia SET codigo_materia = '" . $CODIGO_MATERIA . "', nombre = '" . $NOMBRE . "', grupo = '" . $GRUPO ."' WHERE codigo_materia = '" . $ID . "'");

    $QUERY1 = $db->query("SET FOREIGN_KEY_CHECKS=ON");

    return $this->response->redirect(site_url('/materia'));
  }

  //* ELIMINAR MATERIA  

  public function borrar_materia($codigo_materia = null){

    $db = \Config\Database::connect();

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=OFF");

    $query = $db->query("DELETE FROM materia WHERE codigo_materia = $codigo_materia");

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=ON");

    return $this->response->redirect(site_url('/materia'));

  }
} 
