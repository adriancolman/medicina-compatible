<?php
    session_start();
    if(isset($_SESSION["username"])){
        header('Location: /medicina-compatible/home.php');
    } else{
        header('Location: medicina-compatible\login.php');
    }
?>