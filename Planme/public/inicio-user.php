<?php
session_start();
if (!isset($_SESSION['Usuario'])){ //Inicializamos la variable de sesion para accdeer
    echo ' 
    <script> 
    alert("Debes iniciar sesion para acceder")
    </script>
    ';
    session_destroy(); //Nos destruye la sesion 
    header("location: ../public/register-log.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Plan-Me</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="shortcut icon" href="img/inicio/logo.PNG">
    <title>Plan-Me | Inicio</title>
  </head>

  <body>
    <!-- NAVBAR
  =============================== -->
    <nav class="flex juntify-center md:justify-end">
      <ul class="menu">
        <li><a href="inicio-user.php">Inicio</a></li>
        <li><a href="gallery-plans.php">Galeria</a></li>
        <li><img class="logo" src="img/inicio/logo.PNG" width="100" height="78.99"></li>
        <li><a href="crear.html">Creador</a></li>
        <li>
          <div class="dropdown">
          <ul>
           <button><img src="img/inicio/user.png" width="50" height="50" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
            <i class="fa fa-caret-down"></i>
            </button>
              <div class="dropdown-content">
                      <a href="user.php"><span>Settings</span></a>
                      <a href="../src/cerrarSesion.php"><span>Sing-Out</span></a>
                </div>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>


    <!-- CONTENT
=============================== -->
    <div class="container">
      <div class="content">
        <a class="card">
          <div class="text">
            <div>
              <div class="text-3"><h1><span class="typing"></span></h1></div>
              <br>
              <p>Contamos con mas de <b>100</b> planes predefinidos, para que no
                te quedes sin opciones.</p>
              <br>
              <p>Únete a nosotros y planea actividades con tus amigos.</p>
            </div>
          </div>
        </a>

        <!-- Imagenes Derecha -->

        <a href="" class="card">
          <div class="img">
            <div class="imagenes">
            <img class="img1" id="img-1" src="img/inicio/img1.png">
            <img class="img2" id="img-2" src="img/inicio/img2.png">
            <img class="img3" id="img-3" src="img/inicio/img3.png">
          </div>
          </div>
        </a>

      </div>
    </div>





    <!-- js -->
    <script src="js/page.js"></script>

  </body>
</html>