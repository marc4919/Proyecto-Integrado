<?php
session_start();
unset($_SESSION); //Siempre que queramos usar un destroy hay que poner un start 
session_destroy(); //Aqui lo que hacemos es al destruir la sesion la cerramos y nos dirige a login
header("Location: ../Planme/public/inicio.php");
