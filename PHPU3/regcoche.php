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

