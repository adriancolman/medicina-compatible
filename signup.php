<!DOCTYPE html>
<html>
    <head>
     <title>Registro</title>
     <meta charset="UTF-8" >
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0 ">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="materna.css">
     <script src=script.js></script>

    </head>
        <body style="background-color: #CDF7F6">
          <div class="container">
                    <h1 id="title-form">APPTO LACTANTES</h1>
              <div class="row">
                   <div class="col-md-3"></div>
                   <div class=" col-sm-12 col-md-7">
                        <p id="reg-msg" style="color:#9A94BC; font-size: 25px;">Regístrate para ver todo nuestro contenido</p>
                   </div>
              </div>

              <div class="row">
                 <div class="col-sm-0 col-md-3"></div>
                   <div class="col-sm-12 col-md-8">
                      <form action="acciones\registro.php" method="post">
                          <div class="form-group">
                              <label for="formGroupExampleInput2"  style="color: #9B5094">Nombre</label>
                              <input type="text" class="form-control"  style="color: #9B5094" name="user" id="nombre" placeholder="Nombre real">
                            </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput"  style="color: #9B5094">Usuario</label>
                        <input type="text" style="color: #9B5094" class="form-control" id="usuario" placeholder="Crea tu usuario ">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2"  style="color: #9B5094">Contraseña</label>
                        <input type="password"  style="color: #9B5094" class="form-control" id="contraseña" name="password" placeholder="contraseña">
                      </div>
                      
                        <div class="form-group">
                          <label for="formGroupExampleInput"  style="color: #9B5094">email</label>
                          <input type="email"  style="color: #9B5094" class="form-control" id="mail" name="email" placeholder="@mail">
                        </div>

                        <button class="btn btn-primary" type="submit"> Ingresar</button>
                        
                      
                      
                      </form>

                       
                    
                    </div>
              </div>
              <div class="row">
                <div class="col-sm-0 col-md-3"></div>
                <div class="col-sm-12 col-md-8">
                  <p>¿Ya eres usuario? </p> <a href="login.php">inicia sesión</a>
                </div>
              </div>

          </div>

            
            
            
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>
