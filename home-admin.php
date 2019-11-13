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
                        <a class="dropdown-item" href="login.php">inicia sesión</a>
                        <a class="dropdown-item" href="signup.php">registrate</a>
                        <a class="dropdown-item" href="acciones/cerrar-sesion.php">cerrar sesión</a>
                        <a class="dropdown-item" href="formulariomedicamentos.php">formuario subir</a>
                        <a href="acciones\formulario_riesgo.php" class="dropdown-item">formulario riesgo</a>
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
                  <!--cuerpo de pagina-->
            
            <div class="row">
                <div class="d-none d-md-block col-md-4 col lg-4" style="background-color:#D7A6B3;">
                    <img src="lactancia-materna-beneficios-madre.jpg" style="margin:0%auto; width-max:300px;" class="custom-class">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background-color:#D7A6B3">
                    <div class="offset-1" style="margin-top:45px;">
                        <h1>¿Consulta si es compatible con la lactancia?</h1>
                        <br>
                        <h3>
                            Toda la información necesaria acerca de cualquier medicamento. <br>
                            Por ejemplo: <a href="ibuprofeno.php">ibuprofeno,</a>
                            <a href="diclofenac.php" class="diclofenac">diclofenac,</a>
                            <a href="aspirina" class="aspirina">aspirina</a>, etc.
                        </h3>
            
                    </div>
                </div>
            </div>   
            
                            <!--avisos-->

            <div class="row">
                <div class="  col-lg-7 offset-lg-3   col-md-7 offset-md-3 col-sm-12 col-xs-12">
                    <div class="a-favor">
                        <h4 class="subtitle" style="color:red; margin-top:30px;">
                            Por la lactancia materna

                        </h4>
                        <p class="">La lactancia materna es el fenómeno más saludable para bebés y madres 
                            en todo tiempo y lugar. Muy pocas situaciones justifican contraindicarla.</p>

                    </div>
                </div>
            </div>                
            <div class="row">
                <div class=" col-lg-7 offset-lg-3  col-md-7 offset-md-3 col-sm-12 col-xs-12">
                    <h4 class="subtitle"  style="color:red; margin-top:30px;">Hecho por profesionales

                    </h4 >
                    <p>
                    Las indicaciones son recopiladas de <a href="http://www.e-lactancia.org/" class="">e-lactancia</a> y las realizan pediatras y farmacéuticas de 
                    APILAM para que puedas encontrar fácilmente la información que necesitas.
                    </p>
                </div>
            </div>


                    
            
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </body>
</html>
