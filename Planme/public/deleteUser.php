<?php
require_once("autoloader.php");
$id = $_GET['id'];
$delete = new Admin();
$delete->delete($id);
