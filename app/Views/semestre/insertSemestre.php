<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class='container'>

      <h1 class='text-primary text-center'>Formulario para insertar un registro en semestre</h1>
    </div>

  </nav>
  <div class='container'>

    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Ingresar datos del registro</h3>
        <p class="card-text">
          
          <form method="post" action="<?= site_url('/guardarSemestre') ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="codigo">Estudiante: </label>
              <select name="codigo" id="codigo" class="custom-select mr-sm-2">
                <?php foreach ($personas as $persona) { ?>

                  <option value="<?= $persona["codigo"]; ?>"><?= $persona["codigo"] . " " . $persona["nombres"]?></option>
                <?php } ?>  
                  
              </select>
            </div>
            <div class="form-group">
              <label for="documento">Materia: </label>
              <select name="codigo_materia" id="codigo_materia" class="custom-select mr-sm-2">
                <?php foreach ($materias as $materia) { ?>

                  <option value="<?= $materia["codigo_materia"]; ?>"><?= $materia["codigo_materia"] . " " . $materia["nombre"] . " " . $materia["grupo"]?></option>
                <?php } ?>  
                  
              </select>
            </div>
            
            <button class="btn btn-success" type="submit">Guardar</button>
          </form>
        </p>
      </div>
    </div>
    <a href="<?= base_url('semestre')?>" class="btn btn-primary mt-3 mb-3"> Back</a>
  </div>
</body>
</html>