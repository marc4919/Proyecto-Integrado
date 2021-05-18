<?php

session_start();
if (!isset($_SESSION['Nombre'])){ //Inicializamos la variable de sesion para accdeer
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
  <title>Indice</title>
</head>

<body>

  <!-- NAVBAR
  =============================== -->
    <nav>
      <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><img class="logo" src="img/logo.png"></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Faq</a></li>
      </ul>
    </nav>


  <!-- CONTENT
  =============================== -->
  <div class="content">
    <div class="split left">
      <img src="img/paella.png"  class="imagen">
      <div class="text">
        <h1 class="title">Crea tus planes</h1>
        <p class="desc"><br><br>Crea tus propios planes, y crece <br>en nuestra comunidad.<br>La imaginación no tiene limite.</p>
        <button class="button">Discover More</button>
      </div>
    </div>
    <div class="split right">
      <img src="img/planes.png" class="imagen">
      <div class="text">
        <h1 class="title">Elige un plan</h1>
        <p class="desc"><br><br>Puedes seleccionar entre uno de nuestros<br> planes, contamos con mas de 100 planes<br> predeterminados.</p>
        <button class="button">Discover More</button>
      </div>
    </div>
  </div>




  <!-- js -->
  <script src="js/selecciona.js"></script>
</body>
</html>