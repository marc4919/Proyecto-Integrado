<?php
/*
require "autoloader.php";
$prueba = new Admin();
$prueba->showCountPlans();
$prueba->showCountUser();
$prueba->showUser(); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/admin.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
        <h2><span class="las la-user-shield"></span> <span>Administracion</span></h2>
    </div>
    <!--Selecciones del Dashboard-->
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href=""class="active"><span class="las la-home">Tablero</span></a>
            </li>
            <li>
                <a href=""><span class="las la-stethoscope">Doctores</span></a>
            </li>
            <li>
                <a href=""><span class="las la-user">Usuarios</span></a>
            </li>
            <li>
                <a href=""><span class="las la-user-injured">Pacientes</span></a>
            </li>
            <li>
                <a href=""><span class="las la-stethoscope">Historial de citas</span></a>
            </li>
            <li>
                <a href=""><span class="las la-sign-out-alt">Salir</span></a>
            </li>
        </ul>
    </div>
</div>  
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>Tablero
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar aqui"/>
            </div>

            <div class="user-wrapper">
                <img src="./img/Avatar.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Administrador</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Planes Totales</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                    </div>
                    <div class="card-single">
                      <div>
                          <h1>12</h1>
                          <span>Usuarios Totales</span>
                      </div>
                      <div>
                          <span class="las la-sterhoscope"></span>
                      </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>15</h1>
                            <span>Manejo de doctores</span>
                        </div>
                        <div>
                            <span class="las la-sterhoscope"></span>
                        </div>
                      </div>
                </div>
                   <!--Mostrar los usuarios-->   
                   <div class="recent-grib">
                       <div class="projects">
                           <div class="card">
                               <div class="card-header">
                                   <h3>Usuarios</h3>

                                   <button>Mostrar todo<span class="las la-arrow-right"></span></button>
                               </div>
                               <div class="card-body">
                                   <div class="table-responsive">
                                       <table width="100%">
                                       <thead>
                                           <tr>
                                               <td>Nombre</td>
                                               <td>Correo</td>
                                               <td>Contraseña</td>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                               <td>Nombre php->showUser['Nombre']</td>
                                               <td>Nombre php->showUser['email']</td>
                                               <td>Nombre  php->showUser['password']</td>
                                           </tr>
                                       </tbody>
                                    </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

            </div>
        </main>
    </div>
</body>
</html>