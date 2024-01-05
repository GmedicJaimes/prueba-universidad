<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- STYLES -->

    
</head>
<body >
  <nav class="navbar navbar-dark bg-light">
    <div class='container'>

      <h1 class='text-primary text-center'>Prueba universidad</h1>
    </div>

  </nav>
  <section class=" bg-dark">
    <div class="container bg-dark p-3 ">
  
        <a href="<?= base_url('/alumnos') ?>" class='btn btn-primary'>Alumnos</a>
        <a href="<?= base_url('/materia') ?>" class='btn btn-primary'>Materia</a>
        <a href="<?= base_url('/semestre') ?>" class='btn btn-primary'>Semestre</a>
        <a href="<?= base_url('/previos') ?>" class='btn btn-primary'>Previos</a>
        <a href="<?= base_url('/notas') ?>" class='btn btn-primary'>Notas</a>
    </div>
  </section>

</body>
</html>
