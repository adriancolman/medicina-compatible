<?php
require("acciones/conexion.php");

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="materna.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
    <body>
        <div class="container" style="background-color:#F5ECEB">
            <header>
            <div class="row justify-content-center">
               
                <div class="d-none d-sm-block col-sm-1 col-md-2 col-lg-2" style="max-width:100%">
                   <div class="logo">
                       <p>APPTO
                           
                           
</p> 
                       
                       
                            
                        
                    </div>
                    <div class="nombre-usuario" id=nombre-usuario>
                     </div>   

                </div>
                <div class="d-none d-lg-block col-lg-3">
                   <p style="margin-top:5%"> consultar para no dudar  </p>
                </div>


                <div class="d-none d-sm-block col-sm-6 col-md-5 col-lg-4">
                  <form action="publicaciones.php">
                  <input type="text" name="search" placeholder="buscar" id="search">
                  <button type="submit" id="lupa"><i class="fas fa-search"></i></button>
                  </form>  
                </div>
                
                <div class=" col-xs-12 col-sm-2 col-md-3 col-lg-2 " style=" max-width:100%">    
                    <div class="btn-group">
                    
                    <button type="button" id="button-menu"  class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="home.php">Principal</a>
                        
                        <a class="dropdown-item" href="acciones/cerrar-sesion.php">cerrar sesión</a>
                         <a href="loginadmin.php" class="dropdown-item">¿eres administrador?</a>
                    </div>
                    </div>

                         
                </div>
                <div class="col-xs-12 d-sm-none">
                  <form action="publicaciones.php">
                  <input type="text" name="search" placeholder="buscar" id="search">
                  <button type="submit" id="lupa"><i class="fas fa-search"></i></button>
                  </form>  
                </div>

            </div>


            </header>
                  
            
            
            
                            <!--contenido-->

            <div class="row">
                <div class="  col-lg-7 offset-lg-3   col-md-7 offset-md-3 col-sm-12 col-xs-12">
                    <div class="a-favor">
                        <h4 class="subtitle" style="color:red; margin-top:30px;">
                            ¿Como colaborar con contenido?

                        </h4>
                        <p class="">Si sos un facultativo en medicina o farmaceutica podés ser administrador
                             y colaborar con informes , con contenido nuevo o modificando el existente.</p>

                    </div>
                </div>
            </div>                
            <div class="row">
                <div class=" col-lg-7 offset-lg-3  col-md-7 offset-md-3 col-sm-12 col-xs-12">
                    <h4 class="subtitle"  style="color:red; margin-top:30px;">Quiero ser administrador

                    </h4 >
                    <p>
                    Seras dirigido a un formulario de ingreso donde deberas validar tu identidad, tu matricula
                    y la forma de contactarnos para comenzar a profundizar los contenidos.  <br>
                     <a href="registroadmin.php">Registrate como administrador</a>
                    </p>
                </div>
            </div>

            

                    
            
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </body>
</html>
