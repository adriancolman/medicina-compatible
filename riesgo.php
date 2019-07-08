<?php

require("acciones\conexion.php");

$tituloriesgo = $_REQUEST['tituloriesgo'];
$descripcionriesgo = $_REQUEST['descripcionriesgo'];
$claveriesgo = $_REQUEST['claveriesgo'];

$query = 'INSERT INTO nivelriesgo(titulo, descripcion, clave)
VALUES ("' . $tituloriesgo .'", "' . $descripcionriesgo .'", "' . $claveriesgo .'" )';

mysqli_query($conexion, $query);


?>