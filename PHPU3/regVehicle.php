<!DOCTYPE html>
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
                        <li><a href="regUser.php" >Regístrate</a></li>
                        <li><a href="#" >Loguéate</a></li>
                        <li class="active"><a>Registra tu vehículo</a></li>
                        <li><a href="#">Da de baja tu vehículo</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <section class="formularioRegistro"> 
        <h1>Registra tu vehículo</h1>
        <form role="form">
          <div class="form-group col-md-6">
            <label for="">Matricula</label>
            <input type="text" name="matricula" class="form-control" id="nameUser" placeholder="" required>

            <label for="ejemplo_email_1">Marca</label>
            <input type="text" name="marca" class="form-control" id="formBrand" placeholder="" required>
            
          </div>

          <div class="form-group col-md-6">
            <label for="">Número de contacto</label>
            <input type="number" name="telefono" class="form-control" id="ContactNum" placeholder="" required>

            <label for="ejemplo_password_1">Color</label>
            <input type="text" name="color" class="form-control" id="CarColor" placeholder="" required>


            
          </div>
          <div class="form-group col-md-6">
            <label for="">Observaciones</label>
            <textarea type="text" name="observaciones" class="form-control formRegTextArea" rows="3"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="">Motivo de la visita</label>
            <textarea name="visita" class="form-control formRegTextArea" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Registrar vehículo</button>
          </div>
          
        </form>
    </section>

</body>
</html>