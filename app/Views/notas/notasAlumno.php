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

      <h1 class='text-primary text-center'>Listado de Notas</h1>
    </div>

  </nav>

  <div class="container">
    <a href="<?= base_url('/notas') ?>" class='btn btn-primary mt-3 mb-3'>Home</a>
    
    <a href="<?= base_url('/ingresar-nota') . $estudiante[0]['codigo']?>" class='btn btn-success mt-3 mb-3'>Ingresar Notas</a>
    <table class="table table-dark table-striped ">
      <thead class="table-dark  text-center border">
        <h2>Notas del estudiante: <?= $estudiante[0]['codigo'] . ' ' . $estudiante[0]['nombres']?></h2>
       
        <tr>
          <th>Codigo Materia</th>
          <?php foreach ($previos as $previo) { ?>
            <th><?= $previo["tipo_previo"]?></th>
          <?php } ?>
          <th>Nota Final</th>
          <th>Fecha</th>
          <th>Accion</th>
  
        </tr>
      </thead>
      <tbody class='text-center border'>
        <?php foreach ($notas as $nota) { ?>
          <tr>
            <td ><?= $nota['codigo_materia']?></td>
            
            <?php foreach ($previos as $previo) { ?>
              <td><?= $previo["tipo_previo"]?></td>
            <?php } ?>
            
            <td ><?= $nota['nota'] ?></td>
            <td><?= $nota['fecha_insert']?></td>
            <td >
              <a href='<?= base_url('editar/' . $nota['codigo']) ?>' class="btn btn-info" type="button">Editar</a>
            </td>
          </tr>
          <?php } ?>
      </tbody>
    </table>

  </div>

</body>
</html>