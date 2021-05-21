<?php
require_once "autoloader.php";
session_start();
$obje = new AjustesUser();
$obje->changeUser();
header("location: user.php");
