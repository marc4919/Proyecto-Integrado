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
  <link rel="stylesheet" href="css/crear.css">
  <script src="js/creacionModular.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="img/inicio/logo.png">
  <title>Plan-Me | Creador Plan</title>
</head>

<body>
  <!-- NAVBAR
  =============================== -->
  <nav>
    <ul class="menu">
      <li><a href="inicio-user.php">Inicio</a></li>
      <li><a href="gallery-plans.php">Galeria</a></li>
      <li><img class="logo" src="img/inicio/logo.png" width="100" height="78.99"></li>
      <li><a href="crear.php">Creador</a></li>
      <li>
        <div class="dropdown">
          <ul>
            <button id="icon"><img src="img/inicio/user.png" width="50" height="50" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="user.php"><span class="span1">Perfil</span></a>
              <a href="../src/cerrarSesion.php"><span class="span1">Sing-Out</span></a>
            </div>
      </li>
    </ul>
  </nav>


  <!-- CONTENT
=============================== -->
  <h2>BIENVENIDO A NUESTRO CREADOR</h2>
  <div id="almacenaje">
    <div class="contenedor" id="contenedor1">
      <br>
      <textarea class="paquete" draggable="false" id="caja1" name="Nombre" required placeholder="Nombre Plan" ondragstart="dragstart(this, event)"></textarea>
      <textarea class="paquete" draggable="false" id="caja2" name="Descripcion" required placeholder="Descripción Plan" ondragstart="dragstart(this, event)"></textarea>
      <textarea class="paquete" draggable="false" id="caja3" name="Localizacion" required placeholder="Localización" ondragstart="dragstart(this, event)"></textarea>
      <div class="paquete" draggable="false" id="caja4" ondragstart="dragstart(this, event)">
        <span>Transporte</span>
        <select class="paquete" name="Transporte" draggable="false">
          <option value="Cualquiera">Cualquiera</option>
          <option value="Coche">Coche</option>
          <option value="Coche, Autobús, Metro">Coche, Autobús, Metro</option>
          <option value="Coche, Autobús">Coche, Autobús</option>
          <option value="Caminando">Caminando</option>
        </select>
      </div>
      <div class="paquete" draggable="false" id="caja5" placeholder="Nombre Plan" ondragstart="dragstart(this, event)">
        <span>Categoria1</span>
        <select class="paquete" name="Categoria1" draggable="false">
          <option value="Ocio">Ocio</option>
          <option value="Naturaleza">Naturaleza</option>
          <option value="Degustación">Degustación</option>
          <option value="Turismo">Turismo</option>
          <option value="Diversión en Familia">Diversión en Familia</option>
          <option value="Paisaje">Paisaje</option>
          <option value="Adrenalina">Adrenalina</option>
          <option value="Comida">Comida</option>
          <option value="Entretenimiento">Entretenimiento</option>
          <option value="Deporte">Deporte</option>
          <option value="Ruta">Ruta</option>
          <option value="Belleza">Belleza</option>
        </select>
      </div>
      <div class="paquete" draggable="false" id="caja6" placeholder="Nombre Plan" ondragstart="dragstart(this, event)">
        <span>Categoria2</span>
        <select class="paquete" name="Categoria2" draggable="false">
          <option value="Cine">Cine</option>
          <option value="Misterio">Misterio</option>
          <option value="Masaje">Masaje</option>
          <option value="Vinos">Vinos</option>
          <option value="Ciclismo">Ciclismo</option>
          <option value="Animales">Animales</option>
          <option value="Simulación">Simulación</option>
          <option value="Almuerzo">Almuerzo</option>
          <option value="Comida">Comida</option>
          <option value="Cena">Cena</option>
          <option value="Calas">Calas</option>
          <option value="Bolera">Bolera</option>
        </select>
      </div>
      <textarea class="paquete" draggable="false" id="caja7" name="Precio" required placeholder="Precio" ondragstart="dragstart(this, event)"></textarea>


    </div>
    <!-- contenedor -->
    <div class="contenedor" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false">
      <form action="" method="post" id="formulario"><a href="#" class="myButton">
          <button>Crear Plan</button>
        </a></form>
      </br>

    </div>
  </div>
  <a href="#" class="myButton2"><button onclick="draguear()">Compactar</button></a>
  <script>
    function dragstart(caja, evento) {
      // el elemento a arrastrar
      event.dataTransfer.setData('Data', caja.id);
    }

    function drop(target, evento) {
      form = document.getElementById("formulario");

      // obtenemos los datos
      var caja = event.dataTransfer.getData('Data');
      // agregamos el elemento de arrastre al contenedor
      form.appendChild(document.getElementById(caja));
    }

    function draguear() {
      paquete = document.getElementsByClassName("paquete");
      dragueado = paquete[0].getAttribute("draggable");
      console.log(dragueado);
      if (dragueado === "false") {
        for (let i = 0; i < paquete.length; i++) {
          paquete[i].setAttribute("draggable", "true");
          console.log(dragueado);
        }
      } else if (dragueado === "true") {
        for (let i = 0; i < paquete.length; i++) {
          paquete[i].setAttribute("draggable", "false");
          console.log(dragueado);
        }
      }
    }
  </script>
  <!--Waves Container-->
  <div class="hola">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
      </g>
    </svg>
  </div>
  <!--Waves end-->

</body>

</html>