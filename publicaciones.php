<?php
require("acciones/conexion.php");

session_start();


$search = $_REQUEST['search'];
$query = 'SELECT * FROM publicaciones WHERE titulo LIKE "' . $search . '"LIMIT 1 ';
$resultado = mysqli_query($conexion, $query);
$busqueda = mysqli_fetch_array($resultado);

$query_alternativas = 'SELECT publicaciones.Titulo FROM alternativas RIGHT JOIN publicaciones ON alternativas.PublicacionAlternativaId = publicaciones.PublicacionId WHERE alternativas.PublicacionId = ' . $busqueda['PublicacionId'] .' GROUP BY(publicaciones.PublicacionId)'; 
//RIGHT JOIN ON se usa para unir en la tabla publicaciones los campos Publicacion AlternativaId de la tabla alternativas con el campo publicacionId de la tabla publicaciones DONDE el campo PublicacionId de la tabla alternativas coincide con la busqueda realizada en la query $busqueda
$resultado_alternativas = mysqli_query($conexion, $query_alternativas);

$query_riesgo = 'SELECT * FROM NivelRiesgo WHERE NivelRiesgoId LIKE "' . $busqueda["NivelRiesgoId"] . '" LIMIT 1'; 
$resultado_riesgo = mysqli_query($conexion, $query_riesgo);
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
                   <div class="logo" >
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
                
                <div class="d-xs-flex justify-content-end col-xs-12 col-sm-2 col-md-3 col-lg-2 " style=" max-width:100%">    
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

                        <!--contenido de la pgina-->

            <div class="row">
                <div class="col-12">
                    <h1 class="titulo-medicamento">
                    <?php 
                    echo $busqueda['Titulo'];
                    ?>
                    </h1>
                </div>
            </div>

            <div class="row">
            <?php while($riesgo = mysqli_fetch_array($resultado_riesgo)) {
                  ?>

                <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0" id="columna-de-riesgo"
                 style="border:solid <?php echo $riesgo['Clave'];?>; color:<?php echo $riesgo['Clave'];?>;" >
                 
                  <div class="row">
                  <div class="col-12">
                  <h3>
                      <?php echo $riesgo['Titulo'];?>

                  </h3>
                  </div>
                  </div>
                  <div class="row">
                      <div class="col-12" style="background-color:<?php echo $riesgo['Clave'];?>" id="risk-descript">
                          <p style="color:white;">
                              <?php 
                              echo $riesgo['Descripcion'];?>
                          </p>
                          <?php
                  } ?>
                      </div>
                  </div>
                  
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12" id="columna-contenido">
                    <P id="parrafo-contenido">
                    <?php 
                    echo $busqueda['Descripcion'];
                    ?>
                    </P>


                    <a href=""></a>
                    
                    
                </div>

                <div class="col-lg-2 col-md-3 col-sm-0 col-xs-0" id="columna-sugerencias">
                    <div class="row">
                        <div class="col-12">
                            <h5 style="max-widht:100%">ALTERNATIVAS</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" >
                        <?php
                    while($alternativa = mysqli_fetch_array($resultado_alternativas)) {
                        ?><a href="?search=<?php
                        echo $alternativa["Titulo"];
                        ?>">
                        <?php
                        echo $alternativa["Titulo"];
                        ?>
                        </a>
                        <?php
                     }

                     if($alternativa = NULL) {
                         echo 'este medicamento no tiene o no necesita alternativas';
                     }
                        ?>

                        </div>
                    </div>
                
                </div>
            
            </div>            


         </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </body>
</html>                        