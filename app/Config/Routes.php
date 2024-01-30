<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//? rutas alumnos
$routes->get('alumnos', 'Personas::listar_alumnos');
$routes->get('ingresar', 'Personas::crear_alumno');
$routes->post('guardar', 'Personas::guardar_alumno');
$routes->get('editar/(:num)', 'Personas::editar_alumnos/$1');
$routes->post('actualizar' , 'Personas::actualizar_alumnos');
$routes->get('borrar/(:num)' , 'Personas::borrar_alumnos/$1');


//? rutas materia
$routes->get('materia', 'Materias::listar_materia');
$routes->get('ingresar-materia', 'Materias::ingresar_materia');
$routes->post('guardar-materia', 'Materias::guardar_materia');
$routes->get('editar-materia/(:num)', 'Materias::editar_materia/$1');
$routes->post('actualizar-materia', 'Materias::actualizar_materia');
$routes->get('borrar-materia/(:num)', 'Materias::borrar_materia/$1');


//? rutas semestre
$routes->get('/semestre', 'Semestres::mostrar_semestre');
$routes->get("/insertar", "Semestres::insert_materia");
$routes->post("guardarSemestre" , "Semestres::guardar_semestre");


//? rutas previos
$routes->get('previos', 'Previos::listar_previos');
$routes->get('insertar-previos', 'Previos::insertar_previos');
$routes->post('guardar-previos', 'Previos::guardar_previos');
$routes->get('editar-previo/(:string)', 'Previos::editar_previos/$1');

$routes->get('borrar-previo/(:string)', 'Previos::borrar_previo/$1');


//? rutas notas
$routes->get('notas' , 'Notas::seleccionar_estudiante');
$routes->get('notas-estudiante/(:num)', 'Notas::notas_estudiante/$1');
$routes->get('ingresar-nota/(:num)', 'Notas::ingresar_nota/$1');