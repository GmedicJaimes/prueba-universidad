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

      <h1 class='text-primary text-center'>listado de notas</h1>
    </div>

  </nav>

  <div class="container">
    <a href="<?= base_url('/notas') ?>" class='btn btn-primary mt-3 mb-3'>Home</a>
    
    <a href="<?= base_url('ingresar-nota/' . $estudiante[0]['codigo']) ?>" class='btn btn-success mt-3 mb-3'>Ingresar Notas</a>
    <table class="table table-dark table-striped ">
      <thead class="table-dark  text-center border">
        <h2>Notas del estudiante: <?= $estudiante[0]['nombres'] . ' ' . $estudiante[0]['codigo']?></h2>
       
        <tr>
          <th>Materia</th>
          <th>Nombre</th>
          <?php foreach ($previos as $previo) { ?>
          <th><?php echo $previo['tipo_previo']; ?></th>
          <?php } ?>
          <th>DEF</th>
          
  
        </tr>
      </thead>
      <tbody class='text-center border'>

            
            <?php foreach ($materias as $mat) { $total = 0;?>
              <tr>
                <td><?php echo $mat["codigo_materia"]; ?></td>
                <td><?php echo $mat["nombre"]; ?></td>
                <?php foreach ($previos as $previo) { ?>
                  <td><?php 
                  $notaaux= '-'; 
                  foreach ($notas as $nota) { ?>
                      <?php if($nota["codigo_materia"] == $mat["codigo_materia"]){ 
                        if($nota['tipo_previo'] == $previo['tipo_previo']) {
                        $notaaux = $nota['nota'];

                        $total = $total + ($notaaux * $previo['porcentaje'])/100;
                      } ?>
                    <?php } 
                    } 
                  echo $notaaux; ?></td>


                <?php } ?> 
                <td>
                  <?php 
                    echo $total;  ?>
                </td>
             
                <td></td>
                  
              </tr>
            <?php } ?>  
         
      </tbody>
    </table>

  </div>

</body>
</html>