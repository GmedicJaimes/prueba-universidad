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

    <h2 class="text-center text-primary">Formulario para insertar un alumno</h2>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos del alumno</h5>
        <p class="card-text">
          
          <form method="post" action="<?= site_url('/guardar') ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="codigo">Codigo: </label>
              <input id="codigo" class="form-control" type="number" name="codigo">
            </div>
            <div class="form-group">
              <label for="documento">Documento: </label>
              <input id="documento" class="form-control" type="number" name="documento">
            </div>
            <div class="form-group">
              <label for="nombres">Nombres: </label>
              <input id="nombres" class="form-control" type="text" name="nombres">
            </div>
            <button class="btn btn-success" type="submit">Guardar</button>
          </form>
        </p>
      </div>
    </div>
    <a href="<?= base_url('alumnos')?>" class="btn btn-primary mt-3 mb-3"> Back</a>
  </div>
</body>
</html>