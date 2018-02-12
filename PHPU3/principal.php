<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
    </body>
</html>
<?php
            foreach ($_SESSION["ListUser"] as $indice=>$valor) #recorremos el array para verificar que la sesion esta establecida
            {
                echo "Usuario: $indice pass: $valor";        
            }
?>