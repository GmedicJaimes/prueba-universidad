<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class='container'>

      <h1 class='text-primary text-center'>Listado Materias</h1>
    </div>

  </nav>

  <div class="container">
    <a href="<?= base_url('/') ?>" class='btn btn-primary mt-3 mb-3'>Home</a>

    <a href="<?= base_url('/ingresar-materia') ?>" class='btn btn-success mt-3 mb-3'>Ingresar Materia</a>
    
    <table class="table table-striped table-dark">
      <thead class="thead-dark text-center border">
        <tr>
          <th>Codigo Materia</th>
          <th>Nombre</th>
          <th>Grupo</th>
          <th>Accion</th>
  
        </tr>
      </thead>
      <tbody class='text-center border'>
      <?php foreach ($materias as $materia) { ?>
          <tr>
            <td><?= $materia['codigo_materia']?></td>
            <td><?= $materia['nombre']?></td>
            <td><?= $materia['grupo']?></td>
            <td>

            <a href='<?= base_url('editar-materia/' . $materia['codigo_materia'] ) ?>' class="btn btn-info" type="button">Editar</a>

            /

            <a href='<?= base_url('borrar-materia/' . $materia['codigo_materia'] ) ?>' class="btn btn-danger" type="button">Borrar</a>


            </td>
          </tr>
          <?php } ?> 
      </tbody>
    </table>
  </div>

</body>
</html>