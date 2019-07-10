<?php
require("acciones/conexion.php");
$query = 'SELECT nivelriesgoid, titulo FROM nivelriesgo';
$resultado_riesgo = mysqli_query($conexion, $query);
$riesgo = mysqli_fetch_array($resultado_riesgo);




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
 </head>


        <body>

            <div class="container">
            
                <div class="row">
                    <div class="offset-lg-2 col-lg-9 col-sm-12 col-xs-12">


                        <h1 style="color:red; text-align:center;" >formulario de subida</h1><br><br>
                    
                        <form action="subirpublic.php" method="post">
                        
                        <input type="text" name="titulopublicacion" placeholder="titulo"><br><br>

                        <textarea name="descripcionpublicacion" rows="14" cols="80"  placeholder="describe la publicacion" >
                        </textarea> <br><br>

                        <select name="nivelderiesgo" id="">
                        <option value="<?php echo $riesgo['nivelriesgoid'] ?>"><?php echo $riesgo['titulo']?></option>
                        <option value="2" name="bajo">Riesgo bajo</option>
                        <option value="3" name="alto">Riesgo alto</option>
                        <option value="4" name="muy-alto">muy alto</option>
                        
                        </select><br><br>

                        <button type="submit">enviar</button>
            
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p style="text-align:center;" >dirigirse a <a href="home.php">home</a></p>
                    </div>
                </div>
            
            </div>






            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>




            