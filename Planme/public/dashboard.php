<?php
require "autoloader.php";
$prueba = new Admin();
//$prueba->showCountPlans();
//$prueba->showCountUser();
//$prueba->showUser();
//$prueba->showPlans();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<script src="js/admin.js"></script>
</head>

<body>

	<div class="navbar">

		<li class="nav-item">
			<img src="img/dashboard/logo.png">
		</li>

		<!-- nav right -->
		<ul class="nav-right">
			<li>
				<div class="dropdown">
					<img src="img/dashboard/admin.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="menu">
						<li>
							<a class="dropdown-menu-link">
								<div>
									<i></i>
								</div>
								<span>Profile</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>





	<div class="wrapper">
		<div class="row">
			<!--Nº PLANES-->
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter red">
					<h3><?php $prueba->showCountPlans(); ?></h3>
					<p>Nº PLANES</p>
				</div>
			</div>
			<!--Nº USUARIOS-->
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter red">

					<h3><?php $prueba->showCountUser(); ?></h3>
					<p>Nº USUARIOS</p>
				</div>
			</div>
			<!--CREAR USUARIO-->
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter red">
					<h3>Crear Usuario</h3>
					<button>Haz clic para crear Usuario</button>
				</div>
			</div>
			<!--ELIMINAR USUARIO-->
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter red">
					<h3>Crear Plan</h3>
					<button>Haz clic para crear Plan</button>
				</div>
			</div>
		</div>

		<!--TABLA GRANDE-->
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Table
						</h3>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>NOMBRE</th>
									<th>CORREO</th>
								</tr>
							</thead>
							<tbody id="tablaUsuario">
								<?php $prueba->showUser(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!--TABLA PEQUEÑA-->
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Table
						</h3>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>NOMBRE</th>
								</tr>
							</thead>
							<tbody id="tablaPlan">
								<?php $prueba->showPlans(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="popup-wrapper">
			<div class="popup">
				<div class="popup-close">x</div>
				<div class="popup-content">
					<form action="introduceUserAdmin.php" method="post" class="sign-in-form">
						<p>Nombre: <input type="text" name="Nombre" size="30"></p>
						<p>Correo: <input type="text" name="Correo" size="30"></p>
						<p>Contraseña: <input type="text" name="Password" size="30"></p>

						<p>
							<input type="submit" value="Crear">
						</p>
					</form>
				</div>
			</div>
		</div>

		<div class="popup-wrapper">
			<div class="popup">
				<div class="popup-close">x</div>
				<div class="popup-content">
					<form action="introducePlanAdmin.php" method="post" class="sign-in-form">
						<p>Nombre-Plan: <input type="text" name="Nombre" size="30"></p>
						<p>Descripción: <input type="text" name="Descripcion" size="30"></p>
						<p>Localización: <input type="text" name="Localizacion" size="30"></p>
						<p>Transporte: <input type="text" name="Transporte" size="30"></p>
						<p>Categoría1: <input type="text" name="Categoria1" size="30"></p>
						<p>Categoría2: <input type="text" name="Categoria2" size="30"></p>
						<p>Precio: <input type="text" name="Precio" size="30"></p>

						<p>
							<input type="submit" value="Crear">
						</p>
					</form>
				</div>
			</div>
		</div>

		<script>
			const button = document.getElementsByTagName('button');
			const popup = document.getElementsByClassName('popup-wrapper');
			const close = document.getElementsByClassName('popup-close');

			button[0].addEventListener('click', () => {
				popup[0].style.display = 'block';
			});

			close[0].addEventListener('click', () => {
				popup[0].style.display = 'none';
			});

			popup[0].addEventListener('click', e => {
				// console.log(e);
				if (e.target.className === 'popup-wrapper') {
					popup[0].style.display = 'none';
				}
			});

			button[1].addEventListener('click', () => {
				popup[1].style.display = 'block';
			});

			close[1].addEventListener('click', () => {
				popup[1].style.display = 'none';
			});

			popup[1].addEventListener('click', e => {
				// console.log(e);
				if (e.target.className === 'popup-wrapper') {
					popup[1].style.display = 'none';
				}
			});
		</script>



		<script src="js/index.js"></script>
</body>

</html>