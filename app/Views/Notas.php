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

  <div class='container'>

    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Selecciona al estudiante para ver sus notas:</h3>
        <p class="card-text">
          
          <form method="post" action="<?= site_url('/guardarSemestre') ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="codigo">Estudiante: </label>
              <select name="codigo" id="codigo" class="custom-select mr-sm-2">
                <?php foreach ($estudiantes as $estudiante) { ?>

                  <option value="<?= $estudiante["codigo"]; ?>"><?= $estudiante["codigo"] . " " . $estudiante["nombres"]?></option>
                <?php } ?>  
                  
              </select>
            </div>
            
            <a href='<?= base_url('notas-estudiante/' . $estudiante['codigo'] ) ?>' class="btn btn-success" type="button">Ver Notas</a>

          </form>
        </p>
      </div>
    </div>
    <a href="<?= base_url('/')?>" class="btn btn-primary mt-3 mb-3"> Back</a>

</body>
</html>