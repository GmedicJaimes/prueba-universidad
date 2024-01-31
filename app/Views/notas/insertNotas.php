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

    <h2 class="text-center text-primary">Formulario para insertar una Nota</h2>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingrese los datos de la Nota</h5>
        <p class="card-text">
          
          <form method="post" action="<?= site_url('/guardar-nota') ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="codigo_materia">Codigo Materia: </label>

              <select name="codigo_materia" id="codigo_materia" class="custom-select mr-sm-2">
                
                <?php foreach ($datos as $dato) { ?>
                  <option value="<?= $dato["codigo_materia"]; ?>"><?= $dato["codigo_materia"] . " " . $dato["nombre"] . " " . $dato["grupo"]?></option>
                <?php } ?>  
                  
              </select>
              
            </div>
            <div class="form-group">
              <label for="tipo_previo">Tipo previo: </label>

              <select name="tipo_previo" id="tipo_previo" class="custom-select mr-sm-2">
                
                <?php foreach ($previos as $previo) { ?>
                  <option value="<?= $previo["tipo_previo"]; ?>"><?= $previo["tipo_previo"]?></option>
                <?php } ?>  
                  
              </select>
              
            </div>
            <div class="form-group">
              <label for="nota">Nota: </label>
              <input id="nota" class="form-control" type="float" name="nota">
              
            </div>
            <button class="btn btn-success" type="submit">Guardar</button>
          </form>
        </p>
      </div>
    </div>
    <a href="<?= base_url('notas')?>" class="btn btn-primary mt-3 mb-3"> Back</a>
  </div>
</body>
</html>