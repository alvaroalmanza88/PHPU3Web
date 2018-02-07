<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<html lang="en">
<head>
  <title>Vehiculos on-line</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$login=false;
//$root="admin";
//$pass="admin";
$datos=$_POST["usuario"];
/*if(strcmp($root, $datos["nombre"]) == 0)
    {
        echo "Usuario registrado";
        $show_modal = false;
        include 'principal.html';
    }else
        {
            //echo "Algo ha fallado";
            //$show_modal = true;
            include 'modal.html';
            
        }
    */comprobar_usuario($datos["nombre"], $datos["contrasenia"]);
    if($login)
        {
            //echo "se comprueba login";
            include 'principal.html';
        }else
            {
                //echo "Condicion de usuario y pass incorrecto";
            include 'modal.html';
            }
            
    function comprobar_usuario($user, $pass){
        global $login; # pasamos a la funcion la variable global para que la funcion la pueda utilizar
        global $usuarios;#pasamos a la funcion la variable global para que la funcion la pueda utilizar
        include'init.php';
        foreach ($usuarios as $indice=>$valor) #recorremos el array para hacer una serie de tareas
            {
                if(!$login)# si la variable esta a false que haga lo siguiente
                    {
                        if(strcmp($user, $indice) ==0 && strcmp($pass, $valor)==0) # esto es para comprobar si el usuario y contraseña coinciden con lo que hay en el array
                            {
                                $login=true;# si user y pass coinciden ponemos esta variable a true
                                echo "comprobando: $indice y pass:$valor<br>"; # comprobacion de que usuario se ha buscado
                            }
                    }else # si el login ya esta a true que rompa el for
                        {
                            break;# romper la ejecucion dle for
                        }         
            }
}
?>
    <script> $('#myModal').modal('show');</script>
</body>
</html>
