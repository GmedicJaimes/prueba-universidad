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

      <h1 class='text-primary text-center'>Listado del Semestre</h1>
    </div>

  </nav>

  <div class="container">
    <a href="<?= base_url('/') ?>" class='btn btn-primary mt-3 mb-3'>Home</a>

    <a href="<?= base_url("/insertar") ?>" class='btn btn-success mt-3 mb-3'>Insertar Materia y Alumno</a>
    
    <table class="table table-dark table-striped">
      <thead class=" text-center ">
        <tr>
          <th>Codigo Alumno</th>
          <th>Documento Alumno</th>
          <th>Nombres Alumno</th>
          <th>Codigo Materia</th>
          <th>Nombre Materia</th>
          <th>Grupo Materia</th>
  
        </tr>
      </thead>
      <tbody class='text-center'>
        <?php foreach ($semestres as $semestre) { ?>
          <tr>
            <td><?= $semestre['codigo']?></td>
            <td><?= $semestre['documento']?></td>
            <td><?= $semestre['nombres']?></td>
            <td><?= $semestre['codigo_materia']?></td>
            <td><?= $semestre['nombre']?></td>
            <td><?= $semestre['grupo']?></td>
          </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>