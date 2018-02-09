<!DOCTYPE html>

<html>
<head>
    <title>Dragon Cars Registro de usuario</title>
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
                        <li class="active"><a>Regístrate</a></li>
                        <li><a href="#">Loguéate</a></li>
                        <li><a href="regVehicle.php">Registra tu vehículo</a></li>
                        <li><a href="#">Da de baja tu vehículo</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <section class="formularioRegistro"> 
        <h1>Regístrate</h1>
        <form role="form">
          <div class="form-group col-md-6">
            <label for="">Nombre de usuario</label>
            <input type="text" class="form-control" id="nameUser"
                   placeholder="">

            <label for="ejemplo_email_1">Dirección</label>
            <input type="text" class="form-control" id="direction"
                   placeholder="">
            
          </div>

          <div class="form-group col-md-6">
            <label for="">Contraseña</label>
            <input type="password" class="form-control" id="password" 
                   placeholder="">

            <label for="ejemplo_password_1">Teléfono</label>
            <input type="" class="form-control" id="telephone" 
                   placeholder="">


            
          </div>
          <div class="form-group col-md-10">
            <label for="ejemplo_email_1">Email</label>
            <input type="email" class="form-control" id="email"
                   placeholder="">
            
        </div>
        <div class="form-group col-md-2">
            <button type="submit" class="btn btn-default buttonRegUser">Regístrate</button>
        </div>
          </div>
          
        </form>
    </section>

</body>
</html>