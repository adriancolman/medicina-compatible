<?php
require("conexion.php"); 

session_start();
session_destroy();

header('Location:../login.php');
?>

