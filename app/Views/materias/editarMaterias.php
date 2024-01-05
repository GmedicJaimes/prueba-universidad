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

  <h2 class=" text-primary">Editar Informacion de Materias</h2>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Datos a modificar</h5>
    <p class="card-text">
      
      <form method="post" action="<?= site_url('/actualizar-materia') ?>" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?=$materias[0]["codigo_materia"]?>">

        <div class="form-group">
          <label for="codigo_materia">Codigo: </label>
          <input id="codigo_materia" value="<?=$materias[0]['codigo_materia'] ?>" class="form-control" type="text" name="codigo_materia">
        </div>
        <div class="form-group">
          <label for="nombre">Documento: </label>
          <input id="nombre" value="<?= $materias[0]['nombre'] ?>"  class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
          <label for="grupo">Nombres: </label>
          <input id="grupo" value="<?= $materias[0]['grupo'] ?>" class="form-control" type="text" name="grupo">
        </div>
        
        <button class="btn btn-info" type="submit">Editar</button>
      </form>
    </p>
  </div>
</div>
<a href="<?= base_url('materia')?>" class="btn btn-success"> Back</a>
  </div>
</body>
</html>