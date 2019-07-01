<?php 
    require("acciones\conexion.php");

    session_start();

    $username = $_REQUEST["loginuser"];
    $password = $_REQUEST["loginpassword"];

    $query = 'SELECT * FROM usuarios WHERE username LIKE "' . $username . '" LIMIT 1';

    $resultado = mysqli_query($conexion, $query);

    $usuario = mysqli_fetch_array($resultado);

    if (password_verify($password, $usuario['Password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $usuario['UsusarioId'];

    header('Location: home.php');        
    }  else {
        $_SESSION["message"] = "Usuario o contraseña invalidos";
        header('Location: login.php');
    }



?>