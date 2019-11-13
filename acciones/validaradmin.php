<?php 
    require("conexion.php");

    session_start();

    $username = $_REQUEST["loginuser"];
    $passadmin = $_REQUEST["adminpassword"];
    

    $query = 'SELECT * FROM usuarios WHERE Username LIKE "' . $username . '" LIMIT 1'; //LIKE se usa paa buscar texto por eso las comillas,
                                                                                       //si busco un numero uso =     
    $resultado = mysqli_query($conexion, $query); //almaceno en una variable la busqueda

    $fila = mysqli_fetch_array($resultado); //obtiene un resultado cada vez que se llama la fila de la busqueda


     //si quisiera visualizar en pantalla todos los datos de esta busqueda puedo usar en  var_dump($fila) en vez de echo


     //aca verificamos si la variable password y la fila Password coinciden

    if (password_verify($passadmin, $fila['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $usuario['UsuarioId'];

    header('Location: ../home-admin.php'); }  
               
      else {
        $_SESSION["message"] = "Usuario o contraseña invalidos";
        header('Location: ../login.php');
    }

    
    

    



?>