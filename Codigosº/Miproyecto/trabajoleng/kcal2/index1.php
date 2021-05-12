<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web Pepe</title>
    <link rel="shortcut icon" href="../kcal2/img/hola.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="../menu1/index.php">Inicio</a>
            <a href="#">Info</a>
            <a href="../Proteina1/proteina.php">Proteina</a>
            <a href="#">Contacto</a>
            <a href="#">Nosotros</a>
        </nav>
        <section class="textos-header">
            <h1>Aqui podras encontrar rutinas y calculadoras de proteina y kcal</h1>
            <h2>Calculadoras fiables</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(240, 240, 240);"></path></svg></div>
</header>

<div class="box2">
    <h1>Calcular calorias diarias</h1>
    <h2>Para un cálculo correcto necesitamos algo de información básica sobre ti</h2>
</div>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <div class="box">
        <label for="fname"><span class="label">Edad:</span></label><br>
        <input type="text" id="fname" name="Edad" require><span class="text">años</span><br>
        <span class="label">Sexo:</span><br>
        <span class="text"> Hombre </span><input  type="radio" name="genero" value="H"><br>
        <span class="text">Mujer</span> <input type="radio" name="genero" value="M"><br>
        <label for="fname"><span class="label">Estatura</span></label><br>
        <input type="text" id="fname" name="Estatura" require><span class="text">cm</span><br>
        <label for="fname"><span class="label">Peso</span></label><br>
        <input type="text" id="fname" name="Peso" require><span class="text">kg</span><br>
        <span class="label">Actividad</span><br>
        <select name="entrenamiento">
             <option value="Nada"><span class="label">Poco o nada de ejercicio</span></option>
             <option value="Poco"><span class="label">Poco ejercicio (1-3 dias a la semana)</span></option>
             <option value="Medio"><span class="label">Promedio (3-5 dias a la semana)</span></option>
             <option value="Mucho"><span class="label">Mucho ejercicio (6-7 dias a la semana)</span></option>
             <option value="Pesado"><span class="label">Pesado (2 veces a al dia)</span></option>
        </select><br>
        <input type="submit" name="enviar" value="Enviar"><br>
    
    <?php
        if(count($_POST)>0){
        $Peso = $_POST["Peso"];
        $Estatura = $_POST["Estatura"];
        $Edad = $_POST["Edad"];
        $Entrenamiento = $_POST["entrenamiento"];
        if (isset($_POST ["enviar"])){

        if($_POST["genero"]=="H"){
            $TMB=(10*$Peso)+(6.25*$Estatura)-(5*$Edad)+5;
        }else{
         $TMB=(10*$Peso)+(6.25*$Estatura)-(5*$Edad)-161;
        }
            switch($Entrenamiento){
                case'Nada':
                    $resultado=$TMB*1.2;
                    ?><span class="php">-Calorias necesarias para mantener tu peso: </span><?php echo("<a class=php>$resultado Kcal </a>")."<br>";
                 break;
                case'Poco':
                    $resultado=$TMB*1.375;
                    ?><span class="php">-Calorias necesarias para mantener tu peso: </span><?php echo ("<a class=php>$resultado Kcal </a>")."<br>";
                break;
                case'Medio':
                    $resultado=$TMB*1.55;
                    ?><span class="php">-Calorias necesarias para mantener tu peso: </span><?php echo ("<a class=php>$resultado Kcal </a>")."<br>";
                break;  
                case'Mucho':
                    $resultado=$TMB*1.725;
                    ?><span class="php">-Calorias necesarias para mantener tu peso: </span><?php echo ("<a class=php>$resultado Kcal </a>")."<br>";
                break;  
                case'Pesado':
                    $resultado=$TMB*1.9;
                    ?><span class="php">-Calorias necesarias para mantener tu peso: </span><?php echo ("<a class=php>$resultado Kcal </a>")."<br>";
        } 

            $resultado2=$resultado-500;
            ?><span class="php"> -Calorias Diarias Necesarias Para Perder medio Kilo a la semana: </span><?php echo ("<a class=php>$resultado2 Kcal </a>")."<br>";
            $resultado3=$resultado-1000;
            ?><span class="php"> -Calorias Diarias Necesarias Para Perder 1 kg a la semana: </span><?php echo ("<a class=php>$resultado3 Kcal </a>")."<br>";?>
    <?php

    }
    }
?>
</div>
<hr>
<div class="box3">
<span class="b"><a>Calcular y entender las calorías diarias necesitadas</span><br>
<span class="b">¿Cuántas calorías necesito?</span><br><span class="N">¿Qué es mi consumo de calorías? ¿Cuántas son las calorías diarias necesarias? Estas son las
preguntas que cualquier persona interesada en su alimentación y su salud se habrá hecho alguna vez.
Pero, ¿cuál es la respuesta? Pues bien, la verdad es que conocerla ¡es vital!
Consumir por encima de las calorías necesarias al día significa ganar peso extra. Esto lleva a sobrepeso,
a posibles problemas cardiovasculares e incluso obesidad. Por otra parte,consumir un número menor que las 
calorías diarias recomendadas puede ser igual de peligroso. Privar a tu cuerpo de los nutrientes, minerales y
vitaminas esenciales puede conducir a problemas de salud muy serios. No obstante, ¡a partir de ahora no te tienes
que preocupar por nada de eso! Con la calculadora de calorías diarias podrás calcular las calorías
diarias que tu cuerpo necesita. Simplemente tienes que agregar la información requerida y, ya quieras mantener,
ganar o perder peso, ¡nuestra calculadora de calorías diarias te pondrá en el buen camino!</span><br>
<span class="b">Cómo funciona nuestra calculadora de calorías diarias?</span><br>
<span class="N">Tu consumo de calorías depende de varios factores, incluidos el género, la edad y la actividad diaria.
 Nuestra calculadora de calorías diarias tiene en cuenta todos esos factores. El género, por ejemplo,
juega un papel esencial en el cálculo de calorías diarias necesarias: no requieren las mismas calorías diarias mujeres
,hombres o niños. Los hombres tienen por norma general un mayor porcentaje muscular que las mujeres. 
Ya que los músculos queman calorías mucho más rápido que la grasa, la necesidad calórica de los hombres
suele ser mayor que la de las mujeres. La edad también es importante: a medida que nuestros cuerpos envejecen, 
queman cada vez menos calorías. Eso significa que conforme una persona envejece su metabolismo se ralentiza y, por tanto,
el número de calorías necesarias al día disminuye. Este es un factor esencial, especialmente para alguien que no reduce
su consumo calórico de un año para otro y que en consecuencia gana peso. Por último, pero no por ello menos importante,
está el factor de la actividad y el estilo de vida. Aquellas personas con un estilo de vida más activo quemarán más
calorías durante el día y necesitarán más calorías. Por supuesto, quienes además hagan deporte y, por tanto, aumenten
su masa muscular, tendrán una necesidad calórica aún mayor.</span><br><span class="b">Intrepretando los resultados</span><br>
<span class="b">¿Cuántas calorías necesito según mis objetivos?</span><br><span class="N">Una vez todos esos factores se han tenido en cuenta y 
has agregado tus datos personales, ¡nuestra calculadora te mostrará
tus calorías diarias necesarias! Y vamos un paso más allá proporcionándote el rango de calorías que deberías consumir 
dependiendo de tu peso. Por ejemplo, si para adelgazar tienes que consumir 400-500 calorías menos que en tu consumo habitual,
para ganar peso deberías consumir 300-500 calorías más.</span></a>

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