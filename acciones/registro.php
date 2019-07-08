<?php 
require("conexion.php"); 

$username = $_REQUEST['user']; //variable del name puesto en los inputs del form
$password = $_REQUEST['password']; //variable del name puesto en los inputs del form
 

    $hash = password_hash($password, PASSWORD_BCRYPT);  //encriptar el pass

    $query = 'INSERT INTO usuarios(username, password) 
    VALUES("' . $username . '" , "' . $hash . '")';  //orden de insertar esos datos


    mysqli_query($conexion, $query); //envia datos a la tabla

  
    

    header('Location: ../home.php');


     
     
?>