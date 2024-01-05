<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  <div class='container'>

  <h2 class=" text-primary">Editar Informacion de Alumnos</h2>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Datos a modificar</h5>
    <p class="card-text">
      
      <form method="post" action="<?= site_url('/actualizar') ?>" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?=$alumnos[0]["codigo"]?>">

        <div class="form-group">
          <label for="codigo">Codigo: </label>
          <input id="codigo" value="<?=$alumnos[0]['codigo'] ?>" class="form-control" type="text" name="codigo">
        </div>
        <div class="form-group">
          <label for="documento">Documento: </label>
          <input id="documento" value="<?= $alumnos[0]['documento'] ?>"  class="form-control" type="text" name="documento">
        </div>
        <div class="form-group">
          <label for="nombres">Nombres: </label>
          <input id="nombres" value="<?= $alumnos[0]['nombres'] ?>" class="form-control" type="text" name="nombres">
        </div>
        
        <button class="btn btn-info" type="submit">Editar</button>
      </form>
    </p>
  </div>
</div>
<a href="<?= base_url('alumnos')?>" class="btn btn-success"> Back</a>
  </div>
</body>
</html>