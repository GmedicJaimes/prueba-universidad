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


    $previos = ['Primer Previo', 'Segundo Previo', 'Tercera Nota', 'Examen Final'];

    $datos = ['previos' => $previos];

    return view('previos/insertPrevio', $datos);
  }


  public function guardar_previos(){ 

    $db = \Config\Database::connect();
    
    $PREVIO = $this->request->getVar('tipo_previo');
    $PORCENTAJE = $this->request->getVar('porcentaje');
    
    $sumaPorcentajes = $db->query("SELECT SUM(porcentaje) as total FROM previos")->getRow();

    if($sumaPorcentajes) {

      $porcentajeDisponible = 100 - $sumaPorcentajes->total;

      if($PORCENTAJE <= $porcentajeDisponible){

        $existePrevio = $db->query("SELECT * FROM previos WHERE tipo_previo = '" . $PREVIO . "'")->getRow();
  
        // $existePrevio = $db->query("SELECT * FROM previos WHERE tipo_previo = '" . $PREVIO . "'")->getRow();
  
        if($existePrevio){
  
          return "<script language='javascript'>
                alert('Error el previo ya existe');
                window.location.href='previos';
                </script>";
  
        } else {  
  
          $examen = [
            'tipo' => $PREVIO,
            'porcentaje' => $PORCENTAJE
          ];
          
          $porcentajeDisponible -= $PORCENTAJE;
    
          $query = $db->query("INSERT INTO previos (tipo_previo, porcentaje) VALUES ('" . $examen['tipo'] . "','" . $examen['porcentaje'] . "')");
        }
  
      } else { 

        return "<script language='javascript'>
        alert('El porcentaje agregado es mayor que el disponible. Por favor, ingresa un porcentaje válido.');
        window.location.href='previos';
        </script>";
  
      }

    }

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