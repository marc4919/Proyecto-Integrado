<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../Miproyecto/css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        div {
            position: relative;
            float: left;
            border: 2px black solid;
            margin: 5px;
            padding: 5px;
            width: 400px;
            height: 252px;
        }
    </style>
</head>

<body>
    <?php
    require_once "autoloader.php";
    session_start();
    echo $_SESSION['Correo'];
    $obje = new UserAdmin();
    $obje->showUser();
    ?>
</body>

</html>