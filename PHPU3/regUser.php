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
    <style>
        *{
            box-sizing: border-box;
        }

        body{
            margin :0;
            font-family: sans-serif;
            background: #204862;
        }

        h1{
            color :white;
            text-align: center;
        }

        .form-register{
            width: 95%;
            max-width: 500px;
            margin: auto;
            background: white;
            border-radius: 7px;
        }

        .form__titulo{
            background: deepskyblue;
            color : #fff;
            padding: 20px;
            text-align: center;
            font-weight: 100;
            font-size:30px;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
            border-bottom: 5px solid crimson;
        }
        .contenedor-inputs{
            padding: 10px 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        input{
            margin-bottom: 15px;
            padding: 15px;
            font-size: 16px;
            border-radius: 3px;
            border: 1px solid darkgrey;
        }
        .input-30{
            width: 48%;
        }
        .input-55{
            width: 100%;
        }

        .btn-enviar{
            background: crimson;
        }
    </style>
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
            <h1>Formulario de registro</h1>
            <form action="formularios.php" class="form-register" method="get">
                <h2 class="form__titulo">Crear una cuenta de Usuario</h2>
                <div class="contenedor-inputs">
                    <input type="text" name="nombre" placeholder ="Nombre" class="input-30" required>
                    <input type="text" name="direccion" placeholder ="Dirección" class="input-30" required>
                    <input type="text" name="telefono" placeholder ="Teléfono" class="input-55" required>
                    <input type="text" name="correo" id="correo" placeholder ="Correo" class="input-55" required>
                    <input type="password" name="contraseña" placeholder ="Contraseña" class="input-30" required>
                    <input type="submit" value ="Registrar" name="registro" class="btn-enviar"><br/>
                    <p>Login</p><br/>
                </div>
            </form>


        </div>
     
        <div class="form-group col-md-2">
            <button type="submit" class="btn btn-default buttonRegUser">Regístrate</button>
        </div>
        </div>

    </form>
</section>

</body>
</html>
