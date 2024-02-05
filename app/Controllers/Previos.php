<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Previo;

class Previos extends Controller 
{
  public function listar_previos(){

    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM previos");

    $resultado = $query->getResultArray();

    $datos = ['previos' => $resultado];

    return view('previos', $datos);
  }

  //* insertar previos

  public function insertar_previos(){

    return view('previos/insertPrevio');
  }


  public function guardar_previos(){

    $db = \Config\Database::connect();

    $PREVIO = $this->request->getVar('tipo_previo');
    $PORCENTAJE = $this->request->getVar('porcentaje');

    $query = $db->query("INSERT INTO previos (tipo_previo, porcentaje) VALUES ('" . $PREVIO . "','" . $PORCENTAJE . "')");

    return $this->response->redirect(site_url('/previos'));

  }

  //* editar previos

  public function editar_previos($tipo_previo = null){

    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM previos WHERE tipo_previo = '{$tipo_previo}'");

    $resultado = $query->getResultArray();
 
    $datos = ['previos' => $resultado];

    return view('previos/editarPrevio', $datos);
  }


  //* borrar previo

  public function borrar_previo($tipo_previo = null){

    $tipo_previo = str_replace('', '-', $tipo_previo);

    $db = \Config\Database::connect();

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=OFF");

    $query = $db->query("DELETE FROM previos WHERE tipo_previo = {$tipo_previo}");

    return $this->response->redirect(site_url('/previos'));
  }
}