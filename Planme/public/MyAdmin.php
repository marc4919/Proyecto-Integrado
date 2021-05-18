<?php
require "autoloader.php";
$obj=new Admin;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Pagina Admin </title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
     <script src="https://kit.fontawesome.com/0c8e9049c3.js" crossorigin="anonymous"></script> 
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">MyAdmin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Administrador</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="../public/img/images/h.png" alt="">
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Usuarios</div>
            <div class="number"><?php $obj->showCountUser() ?></div>
          </div>
          <i class="fas fa-user-astronaut"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Planes</div>
            <div class="number"><?php $obj->showCountPlans()?></div>
          </div>
          <i class="fas fa-paper-plane"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total gustados</div>
            <div class="number">400</div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
      </div>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Usuarios Totales</div>
          <div class="sales-details">
          <tr>
            <td>
            <ul class="details">
            <li class="topic">Nombre</li>
            <li><a href="#"><?php $obj->showUser(["Nombre"]) ?></a></li>
          </ul>
          <ul class="details">
            <li class="topic">Email</li>
            <?php $obj->showUser(['Correo']) ?></a></li>
          </ul>
          <ul class="details">
            <li class="topic">Contraseña</li>
            <?php $obj->showUser(["Password"]) ?></a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">Mostrar Todo</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Planes Creados</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <img src="../public/img/images/sunglasses.jpg" alt="">
              <span class="product">Vuitton Sunglasses</span>
            </a>
            <span class="price">$1107</span>
          </li>
          <li>
            <a href="#">
              <img src="../public/img/images/jeans.jpg" alt="">
              <span class="product">Hourglass Jeans </span>
            </a>
            <span class="price">$1567</span>
          </li>
          <li>
            <a href="#">
              <img src="../public/img/images/nike.jpg" alt="">
              <span class="product">Nike Sport Shoe</span>
            </a>
            <span class="price">$1234</span>
          </li>
          <li>
            <a href="#">
              <img src="../public/img/images/scarves.jpg" alt="">
              <span class="product">Hermes Silk Scarves.</span>
            </a>
            <span class="price">$2312</span>
          </li>
          <li>
            <a href="#">
              <img src="../public/img/images/blueBag.jpg" alt="">
              <span class="product">Succi Ladies Bag</span>
            </a>
            <span class="price">$1456</span>
          </li>
          <li>
            <a href="#">
              <img src="../public/img/images/bag.jpg" alt="">
              <span class="product">Gucci Womens's Bags</span>
            </a>
            <span class="price">$2345</span>
          <li>
            <a href="#">
              <img src="../public/img/images/addidas.jpg" alt="">
              <span class="product">Addidas Running Shoe</span>
            </a>
            <span class="price">$2345</span>
          </li>
<li>
            <a href="#">
              <img src="../public/img/images/shirt.jpg" alt="">
              <span class="product">Bilack Wear's Shirt</span>
            </a>
            <span class="price">$1245</span>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
