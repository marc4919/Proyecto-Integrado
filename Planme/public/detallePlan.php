<?php
require_once "autoloader.php";
$id = $_GET['id'];
$obje = new galleryPlan();
$obje->showDetalle($id);
