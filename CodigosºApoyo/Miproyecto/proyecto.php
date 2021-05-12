<?php

session_start();

if (isset($_SESSION['usuariui'])){
    header("location: /Miproyecto/trabajoleng/menu1/index.php");
}  //Si existe la sesion usuario o ya esta iniciada me va a redirigir a la pagina


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="../Miproyecto/css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesion para acceder</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Resgistrate para poder acceder</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--FORMULARIO DE LOGIN Y REGISTRO-->
            <div class="contenedor_login-register">
                <!--Formulario LOGIN-->
                <form action="clases/login.php" method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--FORMULARIO RESGISTRO-->
                <form action="clases/registro.php" method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name = "nombre_completo" required>
                    <input type="text" placeholder="Correo electronico" name = "correo" required>
                    <input type="text" placeholder="Nombre Usuario" name = "usuario" required>
                    <input type="password" placeholder="Contraseña" name = " contrasena" required>
                    <button>Resgistrate</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>