
<?php
include 'bd/conexion.php';

$message='';
if (!empty($_POST['nombre']) && 
  !empty($_POST['apellido']) && 
  !empty($_POST['documento']) && 
  !empty($_POST['usuario']) &&
  !empty($_POST['contrasena'])){

$registro = "insert into persona(nombre,apellido,documento,usuario,contraseña,tipo_persona_idtipo_persona) VALUES (:nombre, :apellido, :documento, :usuario, :contrasena, 2)";

$stmt = $base_datos->prepare($registro);
$stmt->bindparam(':nombre',$_POST['nombre']);
$stmt->bindparam(':apellido',$_POST['apellido']);
$stmt->bindparam(':documento',$_POST['documento']);
$stmt->bindparam(':usuario',$_POST['usuario']);
$stmt->bindparam(':contrasena',$_POST['contrasena']);
$pass= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

IF ($stmt->execute()){
  $message = 'Registrado correctamente';


} else{

  $message = 'ha ocurrido algo inesperado';
}

}

?>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>AutomovilShop</title>

    <style>
                body{
              background-color: #D8D8D8;
              background-size: cover;
          }

          .main-section{
              margin:0 auto;
              margin-top:25%;
              padding: 0;
          }

          .modal-content{
              background-color: #3b4652;
              opacity: .85;
              padding: 0 20px;
              box-shadow: 0px 0px 3px #848484;
          }
          .user-img{
              margin-top: -50px;
              margin-bottom: 35px;
          }

          .user-img img{
              width: 100xp;
              height: 100px;
              box-shadow: 0px 0px 3px #848484;
              border-radius: 50%;
          }

          .form-group input{
              height: 42px;
              font-size: 18px;
              border:0;
              padding-left: 54px;
              border-radius: 5px;
          }

          .form-group::before{
              font-family: "Font Awesome\ 5 Free";
              position: absolute;
              left: 28px;
              font-size: 22px;
              padding-top:4px;
          }

          .form-group#user-group::before{
              content: "\f007";
          }

          .form-group#contrasena-group::before{
              content: "\f023";
          }

          button{
             
              margin: 5px 0 25px;
          } 

          .forgot{
              padding: 5px 0;
          }

          .forgot a{
              color: white;
          }
    </style>
  </head>
  <body>
     <!-- Inicio barra de navegacion -->

     
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="img/logo.jpg"></a>
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

<?php
 if (!empty($message));

?>
<p><?php echo $message?></p> 


<!-- registro -->
<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/avatar.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="text" class="form-control" placeholder="Documento" name="documento"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="contrasena"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                <div  class="alert alert-danger" role="alert">
                  
            </div>
            <div th:if="${param.logout}" class="alert alert-success" role="alert">
                <?php
                   if (!empty($message));

                  ?>
                    <p><?php echo $message?></p> 
            </div>
            </div>
        </div>
    </div>

<!-- fin de registro -->  

<br> 



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>