<?php

session_start();
if (!isset($_SESSION['usuario'])){ //Inicializamos la variable de sesion para accdeer
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaximusWorkout</title>
    <link rel="shortcut icon" href="img/hola.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Info</a>
            <a href="../kcal2/index1.php">Kcal</a>
            <a href="../Proteina1/proteina.php">Proteina</a>
            <a href="#">Contacto</a>
            <a href="#">Nosotros</a>
            <a href="/Miproyecto/clases/cerrarSesion.php">Cerrar Sesion</a>
        </nav>
         <section class="textos-header">
                <h1>Aqui podras encontrar rutinas y calculadoras de proteina y kcal</h1>
                <h2>Calculadoras fiables</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(240, 240, 240);"></path></svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestros Objetivos para ti</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/mot.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Motivarte</h3>
                    <p>Entrenamientos diseñados y estructurados para desarrollar armoniosamente todos los grupos musculares del cuerpo y todos los tipos de fuerza y resistencia. Con completar este reto aprenderás como entrenar de la manera más eficiente para lograr la fuerza REAL.</p>
                    <div class="contenido-textos">
                    <h3><span>2</span>Mejorarte a ti mismpo </h3>
                    <p>Aprender donde se locacliza cada musculo de tu cueropo y sacar partido a las rutinas de entrenamiento para hacerlos mas grandes y fuertes.</p> 
                </div>   
            </div>
        </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
            <h2 class="titulo">RUTINAS</h2>
            <div class="galeria-port">
                <div class="imagen-port">
                    <img src="img/2237930_full-fondos-de-pantalla-hd-de-street-workout-street-workout-wallpapers-wallpaper-cave.jpg" alt="">
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>Calistenia</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/Bici.jpg" alt="">
                    <div class="hover-galeria">
                        <img src="img/Target-icon.png" alt="">
                        <p>Snpinng</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/hombro.jpg" alt="">
                    <div class="hover-galeria">
                        <img src="img/Target-icon.png" alt="">
                        <p>Press Militar</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/flexiones.jpg" alt="">
                    <div class="hover-galeria">
                        <img src="img/Target-icon.png" alt="">
                        <p>flexiones</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/dips.jpeg" alt="">
                    <div class="hover-galeria">
                        <img src="img/Target-icon.png" alt="">
                        <p>Fondos</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/domi.jpg" alt="">
                    <div class="hover-galeria">
                        <img src="img/Target-icon.png" alt="">
                        <p>Espalda</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/press.jpg" alt="">
                    <div class="hover-galeria">
                        <img src="img/Target-icon.png" alt="">
                        <p>Press Banaca</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/sentadilla.jpg" alt="">
                    <div class="hover-galeria">
                        <img src="img/Target-icon.png" alt="">
                        <p>Pierna</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="clientes-contenedor">
            <h2 class="titulo">Nuestros Entrenadores Personales </h2>
            <div class="cards">
                <div class="card">
                    <img src="img/va.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Vadym</h4>
                        <p>VUUUUAAMOS a hacer una buenas rutinas para tener un cuerpo mas fuerte y grande.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/willy.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Willyrex</h4>
                        <p>Lo primero que se aprende es lo último que se olvida.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Tipos de entrenamiento</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/Snpinng.svg" alt="">
                        <h3>Snpinng</h3>
                        <p>En este tipo de entrenamiento nos enfocaremos en el cardio para la perdida de grasa.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/Crosss.svg" alt="">
                        <h3>Crossfit</h3>
                        <p>El crossfit es un ejercicio que gracias a que ofrece resultados rápidos, quema grasa y trabaja todos los músculos de nuestro cuerpo puede ofrecer una figura mucho más estilizada en poco tiempo.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/Fitnes.svg" alt="">
                        <h3>Entrenamiento de fuerza</h3>
                        <p>El entrenamiento de la fuerza muscular utiliza métodos de resistencia, como las pesas, las máquinas de musculación, los elásticos de resistencia o el propio peso corporal para trabajar la fuerza muscular y desarrollar los músculos.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/?logout=1611162426044"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/home"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
    
</body>
</html>
