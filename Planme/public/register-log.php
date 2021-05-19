<?php

session_start();

if (isset($_SESSION['Nombre'])) {
  header("location: ../public/selecciona.php");
}  //Si existe la sesion usuario o ya esta iniciada me va a redirigir a la pagina

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/register-log.css" />
  <title>Login/Register</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="log.php" method="post" class="sign-in-form">
          <h2 class="title">Inicia Sesion</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre" name="Nombre" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
        </form>
        <form action="regis.php" method="post" class="sign-up-form">
          <h2 class="title">Regístrate</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre" name="Nombre" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Correo" name="Correo" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" />
          </div>
          <input type="submit" class="btn" value="Resgistrarse" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>¿Eres Nuevo?</h3>
          <p>
            Registrate,así podras ver la cantidad de planes maravillos para que no te aburras nunca
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Registrarse
          </button>
        </div>
        <img src="img/register-log/valencia.jpg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>¿ Ya perteneces ?</h3>
          <p>
            Accede aquí para iniciar sesion
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Iniciar Sesion
          </button>
        </div>
        <img src="img/register-log/party.png" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="../public/js/app.js"></script>
</body>

</html>