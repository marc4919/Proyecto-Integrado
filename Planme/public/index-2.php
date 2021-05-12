<?php
require_once "autoloader.php";
$obje = new register();
$obje->Registro();

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
   
             <!--FORMULARIO RESGISTRO-->
                <form action="../src/Register.php" method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="Nombre" required>
                    <input type="text" placeholder="Correo electronico" name="correo" required>
                    <input type="text" placeholder="Nombre Usuario" name="Usuario" required>
                    <input type="text" placeholder="Tipo Usuario" name="Tipo" required>
                    <input type="password" placeholder="Contraseña" name=" Password" required>
                    <button>Resgistrate</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/RegisterLogin.js"></script>
</body>

</html>