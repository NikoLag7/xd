<?php 

include 'bd/conexion.php';

  $sentencia = $base_datos -> query('select * from automovil');

  $vehiculo = $sentencia -> fetchAll(PDO::FETCH_OBJ);

?>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
      body  {
        background-color: #D8D8D8;
            }

      h1 {
        text-align:center;
        font-family:"Adobe Gothic Std";
      }


    </style>
    

   

    <title>AutomovilShop</title>
  </head>
  <body>
    <!-- Inicio barra de navegacion -->

     
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="img/logo.jpg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="registro.php">Registrate</a>
          </li>
          
            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Vehiculos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="autos.php">Autos</a>
              <a class="dropdown-item" href="camionetas.php">camionetas</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="vehiculos.php">Todos</a>
            </div>
          </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">Agenda tu cita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>


<!-- fin de barra de navegacion -->
<br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 text>Vehiculos<h1>
      
    </div>
  </div>
</div>


<br>




<br>


<!-- Inicio imagenes autos-->

  <div class="container">
    <div class="row">

      <?php
      foreach ($vehiculo as $dato) {
         
       

      ?>
      
        <div class="col-md-4"> 
          <br>
          <div class="card"  style="width: 18rem;">
            <span class="border border-primary">
            <img src="img/<?php echo $dato->foto; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?php echo $dato->nombre; ?></h5>
              <h6>Precio</h6>
              <p><?php echo $dato->precio; ?></p>
              <p class="card-text"><?php echo $dato->descripcion; ?></p>
              <a href="#" class="btn btn-primary">Ver mas.</a>
            </div>
            </span>
          </div>
        </div>
        
         <?php 

         } 

         ?>
          <br>

     </div>
  </div>
  <br>
  <br>

<!-- fin de imagenes autos -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>