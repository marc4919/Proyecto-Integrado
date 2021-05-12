<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web Pepe</title>
    <link rel="shortcut icon" href="../Proteina1/img/hola.jpg" type="image/x-icon">
    <link rel="stylesheet" href="proteina.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="../menu1/index.php">Inicio</a>
            <a href="#">Info</a>
            <a href="../kcal2/index1.php">Kcal</a>
            <a href="#">Contacto</a>
            <a href="#">Nosotros</a>
        </nav>
         <section class="textos-header">
                <h1>Aqui podras encontrar rutinas y calculadoras de proteina y kcal</h1>
                <h2>Calculadoras fiables</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(240, 240, 240);"></path></svg></div>
    </header>
    <main>
    <div class="box2">
    <h1>Calcular la cantidad de proteina que necesitas al dia</h1>
    <h2>Para realizar estew calculo necesitaremos los siguientes datos</h2>
    </div>
    <div class="box">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <span class="label">Actividad</span><br>    
    <select name="tipo">
             <option value="Bajo"><span class="label">Nivel bajo de entrenamiento</span></option>
             <option value="Resistencia"><span class="label">Entrenamiento de resistencia</span></option>
             <option value="Fuerza"><span class="label">Entrenamiento de fuerza</span></option>
        </select><br>
        <label for="fname"><span class="label">Peso</span></label><br>
        <input class="controls"type="text" id="fname" name="libras"><span class="text">libras</span><br>
        <input class="controls" type="submit" name="enviar" value="Enviar"><br>

       
        <?php
        if(count($_POST)>1){
            $libras = $_POST["libras"];
            $tipo = $_POST["tipo"];
            if (isset($_POST ["enviar"])){
            switch($tipo){
                case'Bajo':
                    $resultado4=$libras*0.4;
                   ?><span class="php">Cantidad de proteina que necesitas </span><?php echo("<a class=php>$resultado4 gramos </a>")."<br>";
                break;
                case'Resistencia':
                    $resultado4=$libras*0.7;
                    ?><span class="php">Cantidad de proteina que necesitas </span><?php echo("<a class=php>$resultado4 gramos </a>")."<br>";
                break;
                case'Fuerza':
                    $resultado4=$libras*0.85;
                    ?><span class="php">Cantidad de proteina que necesitas </span><?php echo("<a class=php>$resultado4 gramos </a>")."<br>";
                break; 
            }
        }
    }
        
?>
</div>
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
