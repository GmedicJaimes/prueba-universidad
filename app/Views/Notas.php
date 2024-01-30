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

  <div class='container'>

      <div class="card-body">
        <h3 class="card-title">Selecciona al estudiante para ver sus notas:</h3>
        <table class="table table-dark table-striped">
        <thead class=" text-center ">
          <tr>
            <th>Codigo</th>
            <th>Nombres</th>
            <th>Notas</th>
    
          </tr>
        </thead>
        <tbody class='text-center'>
          <?php foreach ($estudiantes as $estudiante) { ?>
            <tr>
              <td><?= $estudiante['codigo']?></td>
              <td><?= $estudiante['nombres']?></td>
              <td>
                <a href='<?= base_url('notas-estudiante/' . $estudiante['codigo'] ) ?>' class="btn btn-success" type="button">Ver Notas</a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </div>

      <a href="<?= base_url('/')?>" class="btn btn-primary mt-3 mb-3"> Back</a>
  </div>
    
</body>
</html>