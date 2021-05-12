<?php

 include 'Conexion.php';

    /*METODO DE POST*/
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
   // $contrasena = hash('sha512', $contrasena); //Encrptacion de la contraseña

    //Creamos una query para almacenar los datos en la base de datos 
    $query ="INSERT INTO usuarios(nombre_completo, email, usuario, contrasena) 
    VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
   
   //VERIFICACION CORREO REPETIDO y usuario 
    $verificacion_email = mysqli_query($conexion,"SELECT * FROM usuarios where email ='$correo' or  usuario='$usuario'");
    if(mysqli_num_rows($verificacion_email) > 0){
        echo '
        <script>
            alert("Uno de los campos ya ha sido registrado (email o usuario)");
            window.location=  "../proyecto.php";
        </script>
        ';
        exit(); //Imprime el mensaje y acaba el script actual
        //Cuando el codigo llegue a exit el codigo de abajo no se ejecutará
    }
/*
    //VERIFICACION USUARIO REPETIDO 
    $verificacion_user = mysqli_query($conexion,"SELECT * FROM usuarios where usuario='$usuario'");
    if(mysqli_num_rows($verificacion_user) > 0){
        echo '
        <script>
            alert("Este nombre de usuario ya ha sido elegido, escoja otro");
            window.location=  "../proyecto.php";
        </script>
        ';
        exit();
    }

*/
    $ejecutar = mysqli_query($conexion,$query); //Almacena la infromacion en la base de datos
    
    
    if ($ejecutar){
        echo ' 
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../proyecto.php";
        </script>
        ';
    }else{
        echo ' 
        <script>
            alert("Intentalo de nuevo");
            window.location = "../proyecto.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>