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

    $porcentajeAgregado = $PORCENTAJE;
    $porcentajeDisponible = 100;

    if($porcentajeAgregado <= $porcentajeDisponible){
      
      $examen = [
        'tipo' => $PREVIO,
        'porcentaje' => $porcentajeAgregado
      ];
      
      $query = $db->query("INSERT INTO previos (tipo_previo, porcentaje) VALUES ('" . $examen['tipo'] . "','" . $examen['porcentaje'] . "')");
      
      $porcentajeDisponible -= $porcentajeAgregado;

    } else {

      echo "El porcentaje agregado es mayor que el disponible. Por favor, ingresa un porcentaje válido.";

    }

    print_r($porcentajeDisponible);

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

  public function borrar_previo($id_previos = null){

    $db = \Config\Database::connect();

    $QUERY = $db->query("SET FOREIGN_KEY_CHECKS=OFF");

    $query = $db->query("DELETE FROM previos WHERE id_previos = {$id_previos}");

    return $this->response->redirect(site_url('/previos'));
  }
}