<?php 
require("conexion.php"); 

$useradmin = $_REQUEST['useradmin']; //variable del name puesto en los inputs del form
$mail = $_REQUEST['mail']; //variable del name puesto en los inputs del form
$direccion = $_REQUEST['direccion'];
$pais = $_REQUEST['pais'];
$telefono = $_REQUEST['telefono'];
$matricula = $_REQUEST['matricula'];
$nacimiento = $_REQUEST['nacimiento'];

 

   // $hash = password_hash($password, PASSWORD_BCRYPT);  encriptar el pass

    $query = 'INSERT INTO Colaboradores(Nombre, Direccion, Pais, Correo, Telefono, Matricula, Nacimiento) 
    VALUES("' . $useradmin . '" , "' . $direccion . '" , "' . $pais . '" "' . $mail . '" "' . $telefono . '" "' . $matricula . '" "' . $nacimiento . '")';  //orden de insertar esos datos


    mysqli_query($conexion, $query); //envia datos a la tabla

   


  
    

     header('Location: ../home.php');


     
     
?>