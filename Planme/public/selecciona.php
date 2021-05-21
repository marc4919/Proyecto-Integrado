<?php

session_start();
if (!isset($_SESSION['Usuario'])) { //Inicializamos la variable de sesion para accdeer
  echo ' 
    <script> 
    alert("Debes iniciar sesion para acceder")
    </script>
    ';
  session_destroy(); //Nos destruye la sesion 
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/selecciona.css">
  <link rel="shortcut icon" href="img/inicio/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Plan-Me | Seleccionador</title>
</head>

<body>

  <!-- NAVBAR
  =============================== -->
  <nav>
    <ul class="menu">
      <li><a href="inicio-user.php">Inicio</a></li>
      <li><a href="gallery-plans.php">Galeria</a></li>
      <li><img class="logo" src="img/inicio/logo.png" width="100" height="78.99"></li>
      <li><a href="crear.html">Creador</a></li>
      <li>
        <div class="dropdown">
          <ul>
            <button><img src="img/inicio/user.png" width="50" height="50" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="user.php"><span class="span1">Perfil</span></a>
              <a href="../src/cerrarSesion.php"><span class="span1">Sing-Out</span></a>
            </div>
      </li>
    </ul>
    </div>
    </li>
    </ul>
  </nav>


  <!-- CONTENT
  =============================== -->
  <div class="content">
    <div class="split left">
      <img src="img/selecciona/paella.png" class="imagen">
      <div class="text">
        <h1 class="title">Crea tus planes</h1>
        <p class="desc"><br><br>Crea tus propios planes, y crece <br>en nuestra comunidad.<br>La imaginación no tiene limite.</p>
        <a href="crear.html"><button class="button">Crear Plan</button></a>
      </div>
    </div>
    <div class="split right">
      <img src="img/selecciona/planes.png" class="imagen">
      <div class="text">
        <h1 class="title">Elige un plan</h1>
        <p class="desc"><br><br>Puedes seleccionar entre uno de nuestros<br> planes, contamos con mas de 100 planes<br> predeterminados.</p>
        <a href="gallery-plans.php"><button class="button">Seleccionar Plan</button></a>
      </div>
    </div>
  </div>
  <a href="crear.php"><button class="button1">Crear Plan</button></a>
  <a href="galeria.html"><button class="button2">Seleccionar Plan</button></a>





  <!-- js -->
  <script src="js/selecciona.js"></script>
</body>

</html>