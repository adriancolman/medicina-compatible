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
        <div class="container">
            <header>
            <div class="row">
                <div class="col-2">
                   <div class="logo">
                       <h3>APPTO
                           
                           
                       </h3> 
                       
                       
                            
                        
                    </div>
                    <div class="nombre-usuario" id=nombre-usuario>
                     </div>   

                </div>
                <div class="col-3">
                   <p style="margin-top:10px"> consultar para no dudar  </p>
                </div>
                <div class="offset-1 col-3">
                  <input type="text" name="seacrh" placeholder="search" style="margin-top:10">  
                </div>
                <div class="offset-1 col-2">    
                    <div class="btn-group">
                    
                    <button type="button" style="margin-top:10; background-color:#985094; padding-right:20" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">inicia sesión</a>
                        <a class="dropdown-item" href="signup.php">registrate</a>
                        <a class="dropdown-item" href="#!">cerrar seión</a>
                        <a class="dropdown-item" href="formulariomedicamentos.php">formuario subir</a>
                        <a href="acciones\formulario_riesgo.php" class="dropdown-item">formulario riesgo</a>
                    </div>
                    </div>

                     
                </div>

            </div>


            </header>


                        <!--contenido de la pgina-->



            <div class="row">

                <?php 
                
                ?>
                <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0" id="columna-de-riesgo">
                
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="columna-contenido">

                    <h1 class="titulo producto"></h1>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0" id="columna-sugerencias">
                
                </div>
            
            </div>            


         </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </body>
</html>                        