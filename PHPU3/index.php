<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<html>
    <head>
        <title>Vehiculos on-line</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         <style>
            .img-responsive {margin:0 auto;}
        </style>
</head>
    </head>
    <body class="container bg-dark text-white">
        <div class="container bg-dark text-white"  >
            <div class="row">
                <div class="col-sm-3">
                    <!-- cloumna de posicion -->
                  <img src="imagenes/Casa_Targaryen_estandarte.png" class="img-responsive">
                </div>
                <div class="col-sm-6" >
                    <form role="form" id ="myform" action="autenticar.php" method="post">
                        <div class="form-group">
                            <h2>Taller Targaryen</h2>
                                <label for="LabelInputNonmbre"> Nombre de Usuario</label>
                                <input type="text" name="usuario[nombre]" class="form-control" id="InputNonmbre" required="true">
                        </div>
                        <div class="form-group">
                                <label for="LabelInputpass"> contraseña</label>
                                <input type="password" name="usuario[contrasenia]" class="form-control" id="Inputpass" required="true">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Iniciar</button>
                        </div>
                    </form> 
                </div>
                <div class="col-sm-3" class="bg-dark text-white">
                    <!-- cloumna de posicion -->
                </div>
            </div>
            
        </div>
    </body>
</html>
<?php
include 'init.php';