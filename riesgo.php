<?php

require("acciones\conexion.php");

$tituloriesgo = $_REQUEST['tituloriesgo'];
$descripcionriesgo = $_REQUEST['descripcionriesgo'];
$claveriesgo = $_REQUEST['claveriesgo'];

$query = 'INSERT INTO nivelriesgo(titulo, descripcion, clave)
VALUES ("' . $tituloriesgo .'", "' . $descripcionriesgo .'", "' . $claveriesgo .'" )';

mysqli_query($conexion, $query);

/* 
                                NIVELES DE RIESGO


            RIESGO MUY BAJO

            Seguro. Compatible. Sin riesgo para la lactancia y el lactante.

            RIESGO BAJO

            Bastante seguro. Probablemente compatible. Riesgo leve o poco probable. 

            RIESGO ALTO

            Poco seguro. Valorar todos los datos. Usar alternativa más segura o interrumpir lactancia varios días
                            
            RIESGO MUY ALTO

            Muy inseguro. Contraindicado. Uso de una alternativa o cese de la lactancia.

*/
?>

