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

      <h1 class='text-primary text-center'>Listado alumnos</h1>
    </div>

  </nav>

  <div class="container">
    <a href="<?= base_url('/') ?>" class='btn btn-primary mt-3 mb-3'>Home</a>
    
    <a href="<?= base_url('/ingresar') ?>" class='btn btn-success mt-3 mb-3'>Ingresar alumno</a>
    <table class="table table-dark table-striped ">
      <thead class="table-dark  text-center border">
        <tr>
          <th >Codigo</th>
          <th>Documento</th>
          <th>Nombres</th>
          <th>Accion</th>
  
        </tr>
      </thead>
      <tbody class='text-center border'>
        <?php foreach ($notas as $nota) { ?>
          <tr>
            <td ><?= $nota['codigo']?></td>
            <td ><?= $nota['documento']; ?></td>
            <td ><?= $nota['nombres'] ?></td>
            <td >
            <a href='<?= base_url('editar/' . $nota['codigo']) ?>' class="btn btn-info" type="button">Editar</a>

            /

            <a href='<?= base_url('borrar/' . $nota['codigo']) ?>' class="btn btn-danger" type="button">Borrar</a>


            </td>
          </tr>
          <?php } ?>
      </tbody>
    </table>

  </div>

</body>
</html>