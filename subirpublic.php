<?php 
require("acciones\conexion.php");

$titulo = $_REQUEST['titulopublicacion'];
$descripcion = $_REQUEST['descripcionpublicacion'];
$riesgo = $_REQUEST['nivelderiesgo'];

$medicine = 'INSERT INTO Publicaciones(titulo , descripcion, nivelriesgoid)
VALUES("' . $titulo . '" , "' . $descripcion . '" , "' . $riesgo . '")';

mysqli_query($conexion, $medicine);

echo mysqli_error($conexion);

 if (!$medicine) {
     echo 'error al subir';
 } else {
     echo 'subido correctamente';
 }
 header('Location:home.php');





?>