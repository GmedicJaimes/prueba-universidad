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

      <h1 class='text-primary text-center'>Formulario para insertar un previo y su porcentaje</h1>
    </div>

  </nav>
  <div class='container'>

    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Ingresar datos del previo</h3>
        <p class="card-text">
          
          <form method="post" action="<?= site_url('/guardar-previos') ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="tipo_previo">Tipo de previo: </label>
              <select name="tipo_previo" id="tipo_previo" class="custom-select mr-sm-2">
                <?php foreach ($previos as $previo) { ?>

                  <option value=""><?= $previo?></option>
                <?php } ?>  
                  
              </select>
              
            </div>
            <div class="form-group">
              <label for="porcentaje">Porcentaje: </label>
              <input type="number" name="porcentaje" id="porcentaje" class="form-control" >
            </div>
            
            <button class="btn btn-success" type="submit">Guardar</button>
          </form>
        </p>
      </div>
    </div>
    <a href="<?= base_url('previos')?>" class="btn btn-primary mt-3 mb-3"> Back</a>
  </div>
</body>
</html>