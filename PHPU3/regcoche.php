<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<?php
    include 'init.php';
    $datos=$_POST['car'];
    echo "Tamaño array antes: ".count($_SESSION["ListUser"]);
    array_push($_SESSION["ListCar"], array('matricula'=>'$datos[matricula]', 'contacto'=>'$datos[telefono]', 'marca'=>'$datos[marca]', 'color'=>'$datos[color]', 'observaciones'=>'$datos[observaciones]','motivo'=>'$datos[motivo]'));
    echo "Tamaño array antes: ". count($_SESSION["ListUser"]);

