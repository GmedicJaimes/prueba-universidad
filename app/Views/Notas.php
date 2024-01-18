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

      <h1 class='text-primary text-center'>Listado del Notas</h1>
    </div>

  </nav>

  <div class="container">
    <a href="<?= base_url('/') ?>" class='btn btn-primary mt-3 mb-3'>Home</a>

    <a href="<?= base_url("/insertar") ?>" class='btn btn-success mt-3 mb-3'>Insertar Notas</a>
    
    <table class="table table-dark table-striped">
      <thead class=" text-center ">
        <tr>
          <th>Codigo Alumno</th>
          <th>Codigo Materia</th>
          <th>Tipo Previo</th>
          <th>Nota Final</th>
          <th>Fecha</th>
  
        </tr>
      </thead>
      <tbody class='text-center'>
        <?php foreach ($notas as $nota) { ?>
          <tr>
            <td><?= $nota['codigo']?></td>
            <td><?= $nota['codigo_materia']?></td>
            <td><?= $nota['tipo_previo']?></td>
            <td><?= $nota['nota']?></td>
            <td><?= $nota['fecha_insert']?></td>
          </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>