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
	<title>ATPro Admin</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>

<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<img src="logo.png">
			</li>
		</ul>
		<!-- end nav left -->

		<!-- nav right -->
		<ul class="navbar-nav nav-right">

			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="assets/tuat.jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li class="dropdown-menu-item">
							<a class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Profile</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->

	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?php $prueba->showCountPlans(); ?></h3>
					<p>PLANES</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3><?php $prueba->showCountUser(); ?></h3>
					<p>USUARIOS</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<button>Haz clic para ver el popup</button>
					<h3>100+</h3>
					<p>Completed</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-bug"></i>
					</p>
					<h3>100+</h3>
					<p>Issues</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							DATOS USUARIOS
						</h3>
						<i class="fas fa-ellipsis-h"></i>
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
							<tbody>
								<?php $prueba->showUser(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							DATOS PLANES
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>NOMBRE</th>
								</tr>
							</thead>
							<tbody>
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
					<h3>Ofertas libros JavaScript</h3>
					<p>¡No te pierdas las mejores ofertas de libros para aprender JavaScript!</p>
					<a href="https://amzn.to/2n9BJgk" target="_blank">¡Quiero verlos!</a>
					<form>
						<input type="radio" id="male" name="gender" value="male">
						<label for="male">Male</label><br>
						<input type="radio" id="female" name="gender" value="female">
						<label for="female">Female</label><br>
						<input type="radio" id="other" name="gender" value="other">
						<label for="other">Other</label>
					</form>
				</div>
			</div>
		</div>

		<script>
			const button = document.querySelector('button');
			const popup = document.querySelector('.popup-wrapper');
			const close = document.querySelector('.popup-close');

			button.addEventListener('click', () => {
				popup.style.display = 'block';
			});

			close.addEventListener('click', () => {
				popup.style.display = 'none';
			});

			popup.addEventListener('click', e => {
				// console.log(e);
				if (e.target.className === 'popup-wrapper') {
					popup.style.display = 'none';
				}
			});
		</script>
		<script src="index.js"></script>
		<!-- end import script -->
</body>

</html>