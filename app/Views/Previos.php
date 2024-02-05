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

      <h1 class='text-primary text-center'>Asignar previos y Porcentaje</h1>
    </div>

  </nav>

  <div class="container">
    <a href="<?= base_url('/') ?>" class='btn btn-primary mt-3 mb-3'>Home</a>

    <a href="<?= base_url("/insertar-previos") ?>" class='btn btn-success mt-3 mb-3'>Ingresar previo</a>
    
    <table class="table table-dark table-striped">
      <thead class=" text-center ">
        <tr>
          <th>Tipo de previo</th>
          <th>Porcentaje %</th>
          <th>Acciones</th>
  
        </tr>
      </thead>
      <tbody class='text-center'>
        <?php foreach ($previos as $previo) { ?>
          <tr>
            <td><?= $previo['tipo_previo']?></td>
            <td><?= $previo['porcentaje']?>%</td>
            <td>
              <a href='<?= base_url('editar-previo/' . $previo['tipo_previo'] ); ?>' class="btn btn-info" type="button">Editar</a>

              /

              <a href='<?= base_url('borrar-previo/' . $previo['id_previos'] ); ?>' class="btn btn-danger" type="button">Borrar</a>
            </td>
          </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>