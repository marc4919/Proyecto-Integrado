<?php
require_once "autoloader.php";
session_start();
$obje = new UserAdmin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan-Me</title>
  <link rel="stylesheet" href="css/user.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Indice</title>
</head>

<body>
  <!-- NAVBAR
  =============================== -->
  <nav>
    <ul class="menu">
      <li><a href="inicio.html">Inicio</a></li>
      <li><a href="nosotros.html">Nosotros</a></li>
      <li><img class="logo" src="img/inicio/logo.png"></li>
      <li><a href="#">Contact</a></li>
      <li>
          <div class="dropdown">
          <ul>
           <button><img src="img/inicio/user.png" width="50" height="50" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
            <i class="fa fa-caret-down"></i>
            </button>
              <div class="dropdown-content">
                      <a href="user.php"><span>Settings</span></a>
                      <a href="inicio.html"><span>Sing-Out</span></a>
                </div>
              </li>
            </ul>
          </div>
        </li>
    </ul>
  </nav>


  <!-- CONTENT
=============================== -->

  <span class="caja"><img class="perfil-img" src="img/user-page/perfil.png"></span>
  <span class="caja">
    <h2 class="perfil-nombre"><?php echo $_SESSION['NombreUsuario']; ?></h2>
  </span>




  <!-- Tab links -->
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, '1')">Planes Guardados</button>
    <button class="tablinks" onclick="openCity(event, '2')">Planes Creados</button>
  </div>

  <!-- Tab content -->
  <div id="1" class="tabcontent">
    <?php $obje->showUser(); ?>
  </div>

  <div id="2" class="tabcontent">
    <?php $obje->showCreation(); ?>
  </div>






  <script src="js/user.js"></script>




</body>

</html>