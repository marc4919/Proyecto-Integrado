<?php

session_start();
if (!isset($_SESSION['Usuario'])) { //Inicializamos la variable de sesion para accdeer
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan-Me</title>
  <link rel="stylesheet" href="css/gallery-plans.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/gallery.js"></script>
  <link rel="shortcut icon" href="img/inicio/logo.png">
  <title>Plan-Me | Galeria Planes</title>
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
              <a href="user.php"><span class="span1">Settings</span></a>
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

  <span class="title">Galeria de Planes</span>

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'galeriaPrincipal')">Sin Filtros</button>
    <button class="tablinks" onclick="openCity(event, 'galeriaSecundaria')">Por Nombre</button>
    <button class="tablinks" onclick="openCity(event, 'galeria3')">Por Precio</button>
    <button class="tablinks" onclick="openCity(event, 'galeria4')">Por Transporte</button>
    <button class="tablinks" onclick="openCity(event, 'galeria5')">Por Categoria</button>
    <button class="tablinks" onclick="openCity(event, 'galeria6')">Filtrado Completo</button>
  </div>

  <div id="galeriaPrincipal" class="tabcontent" style="display: block;">
  </div>

  <div id="galeriaSecundaria" class="tabcontent">
    <form action="" method="post" id="filtroNombre" class="sign-in-form">
      <p>Nombre: <input type="text" name="Nombre" size="30"> </p>
      <p>
        <input type="submit" value="Buscar">
      </p>
    </form>
    <div id="caja2"></div>
  </div>

  <div id="galeria3" class="tabcontent">
    <form action="" method="post" id="filtroPrecio" class="sign-in-form">
      <p>Precio: <input type="text" name="Precio" size="30"> </p>
      <p>
        <input type="submit" value="Buscar">
      </p>
    </form>
    <div id="caja3"></div>
  </div>

  <div id="galeria4" class="tabcontent">
    <form action="" method="post" id="filtroTransporte" class="sign-in-form">
      <p>Transporte: <input type="text" name="Transporte" size="30"></p>
      <p>
        <input type="submit" value="Buscar">
      </p>
    </form>
    <div id="caja4"></div>
  </div>

  <div id="galeria5" class="tabcontent">
    <form action="" method="post" id="filtroCategoria" class="sign-in-form">
      <p>Categoría: <input type="text" name="Categoria" size="30"></p>
      <p>
        <input type="submit" value="Buscar">
      </p>
    </form>
    <div id="caja5"></div>
  </div>

  <div id="galeria6" class="tabcontent">
    <form action="" method="post" id="filtroCompleto" class="sign-in-form">
      <p>Nombre: <input type="text" name="Nombre" size="30"></p>
      <p>Precio: <input type="text" name="Precio" size="30"></p>
      <p>Transporte: <input type="text" name="Transporte" size="30"></p>
      <p>Categoría: <input type="text" name="Categoria" size="30"></p>
      <p>
        <input type="submit" value="Buscar">
      </p>
    </form>
    <div id="caja6"></div>
  </div>

  <!-- JS
=============================== -->
  <script src="js/gallery-plans.js"></script>

</body>

</html>