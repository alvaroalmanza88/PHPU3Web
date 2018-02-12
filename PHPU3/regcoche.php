<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<?php
    session_start();
    //include 'init.php';
    $datos=$_POST['car'];
    //echo "Tamaño array antes: ".count($_SESSION["ListUser"]);
    array_push($_SESSION["ListCar"], array('matricula'=>$datos['matricula'], 'contacto'=>$datos['telefono'], 'marca'=>$datos['marca'], 'color'=>$datos['color'], 'observaciones'=>$datos['observaciones'],'motivo'=>$datos['visita']));
    //echo "Tamaño array antes: ". count($_SESSION["ListUser"]);
    $cars=array_pop($_SESSION["ListCar"]);
    echo "Datos de coche dados de alta: <br>";    
    print_r($cars);
 ?>
<html>
<head>
    <title>Dragon Cars Registro de vehículo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="styles.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-default navbarHome navbarForm">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img alt="Logo Reducido Dragon cars" src="images/logoAbreviadoDragonCars.png"></a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="indexNew.php">Inicio <span class="sr-only">(current)</span></a></li>
                        <li><a href="regUser.php" >Alta usuario</a></li>
                        <!--<li><a href="#" >L</a></li>-->
                        <li class="active"><a>Alta vehículo</a></li>
                        <li><a href="delcoche.php">Baja vehículo</a></li>
                        <li><a href="deluser.php">Baja usuario</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <section class="formularioRegistro"> 
    </section>

</body>
</html>
