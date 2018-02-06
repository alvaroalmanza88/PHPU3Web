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
$root="admin";
$pass="admin";
$datos=$_POST["usuario"];
//echo $datos["nombre"];
if(strcmp($root, $datos["nombre"]) == 0)
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
?>
    <script> $('#myModal').modal('show');</script>
</body>
</html>
