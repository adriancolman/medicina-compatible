<!DOCTYPE html>
<html>
    <head>
        <title>LoginAdmin</title>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0 ">-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="materna.css">
    </head>
    <body style="background-color:  #D7A6B3">
            
        <div class="container">
                <h1 id="title-form">APPTO LACTANTES</h1>

            <div class="row">
                <div class="col-3 "></div>
                <div class="col md-7">
                    <p style="color:#C455A8; font-size: 25px; ">Inicia sesión como administrador</p>
                </div>
            </div>

            <div class="row">
                <div class="d-none d-md-block col-md-3"></div>
                <div class="col-xs-12 col-md-7 col-lg-7">
                        <div class="card">
                                
                                <div class="card-body" style="background-color: #CF8BA3">
                                  <h4 class="card-title">Login</h4>
                                  <p class="card-text">
                                        <form action="acciones/validaradmin.php" method="post">
                                                <div class="form-group">
                                                  <label for="formGroupExampleInput">Usuario</label>
                                                  <input type="text" name="loginuser" class="form-control" id="formGroupExampleInput" placeholder="Usuario">
                                                </div>
                                                <div class="form-group">
                                                  <label for="formGroupExampleInput2">Contraseña</label>
                                                  <input type="password" class="form-control" name="adminpassword" id="formGroupExampleInput2" placeholder="Contraseña">
                                                </div>
                                                <button type="submit" class="btn btn-primary"> Ingresar</button>
                                              </form>
                                  </p>
                                  
                                </div>
                              </div>
                              
                        
                              
                </div>
            </div>

            <div class="row">
                <div class="col-3 col-sm-0"></div>
                <div class="col-md-8 col-sm-12">
                    ¿No eres usuario? <a href="signup.php">Regístrate</a> 
                </div>
            </div> <br>

            <div class="row">
                <div class="col-3 col-sm-0"></div>
                <div class="col-md-8 col-sm-12">
                    ¿quieres ser administrador y agregar contenido? <a href="contacto.php">Contactanos</a> 
                </div>
            </div> <br>
            
            

        </div>
        

        
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>