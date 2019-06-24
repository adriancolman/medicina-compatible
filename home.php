<?php
require("acciones/conexion.php");

session_start();
?>

<!DOCTYPE htmal>
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
        <div class="container" style="margin-top:10px">
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
                    <span> consultar para no dudar  </span>
                </div>
                <div class="offset-5 col-2">    
                    <div class="dropdown open" >
                         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 Dropdown
                                 </button>
                                                     <div class="dropdown-menu">
                                 <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="#!">Action</a>
                           <a class="dropdown-item" href="#!">Another action</a>
                           </div>
                            </div>
                </div>

            </div>


            </header>
            
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </body>
</html>