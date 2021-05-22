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
      <li><a href="inicio-user.php">Inicio</a></li>
      <li><a href="gallery-plans.php">Galeria</a></li>
      <li><img class="logo" src="img/inicio/logo.png"></li>
      <li><a href="crear.php">Creador</a></li>
      <li>
        <div class="dropdown">
          <ul>
            <button><img src="img/inicio/user.png" width="50" height="50" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="inicio.php"><span>Sing-Out</span></a>
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
  <button id="ajustes"> Ajustes</button>




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




  <div class="popup-wrapper">
    <div class="popup">
      <div class="popup-close">x</div>
      <div class="popup-content">
        <form action="ajustesUsuario.php" method="post" class="sign-in-form">
          <p>Nombre: <input type="text" name="Nombre" size="30" value="<?php
                                                                        require_once "autoloader.php";
                                                                        $obje = new AjustesUser();
                                                                        $obje->showName(); ?>"></p>
          <p>Correo: <input type="text" name="Correo" size="30" value="<?php
                                                                        require_once "autoloader.php";
                                                                        $obje = new AjustesUser();
                                                                        $obje->showCorreo(); ?>"></p>
          <p>Contraseña: <input type="text" name="Password" size="30" value="<?php
                                                                              require_once "autoloader.php";
                                                                              $obje = new AjustesUser();
                                                                              $obje->showPassword(); ?>"></p>
          <input type="submit" value="Crear">
          </p>
        </form>
      </div>
    </div>
  </div>

  <script>
    const button = document.getElementById('ajustes');
    const popup = document.getElementsByClassName('popup-wrapper');
    const close = document.getElementsByClassName('popup-close');

    button.addEventListener('click', () => {
      console.log(1);
      popup[0].style.display = 'block';
    });

    close[0].addEventListener('click', () => {
      popup[0].style.display = 'none';
    });

    popup[0].addEventListener('click', e => {
      // console.log(e);
      if (e.target.className === 'popup-wrapper') {
        popup[0].style.display = 'none';
      }
    });
  </script>





  <script src="js/user.js"></script>




</body>

</html>