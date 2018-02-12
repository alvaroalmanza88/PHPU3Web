<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<?php
    include 'init.php';
    $datos=$_GET['reguser'];
    echo "Tamaño array antes: ".count($_SESSION["ListUser"]);
    array_push($_SESSION["ListUser"], array('usuario'=>'$datos[nombre]', 'pass'=>'$datos[contrasenia]', 'dir'=>'$datos[direccion]', 'telefono'=>'$datos[telefono]', 'correo'=>'$datos[correo]'));
    echo "Tamaño array antes: ". count($_SESSION["ListUser"]);
?>