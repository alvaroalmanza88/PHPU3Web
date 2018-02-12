<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<?php
    session_start();
    //include 'init.php';
    $datos=$_POST['reguser'];
    //echo "Tamaño array antes: ".count($_SESSION["ListUser"]);
    array_push($_SESSION["ListUser"], array('usuario'=>$datos['nombre'], 'pass'=>$datos['contrasenia'], 'dir'=>$datos['direccion'], 'telefono'=>$datos['telefono'], 'correo'=>$datos['correo']));
    $usr=array_pop($_SESSION["ListUser"]);
    //echo "Tamaño array antes: ". count($_SESSION["ListUser"]);
            /*foreach ($_SESSION["ListUser"] as $row) #recorremos el array como una serie de filas para hacer una serie de tareas
            {
                echo "Datos de usuario: ".$row['usuario']."<br>";      
            }*/
        echo "Datos de usuario dados de alta: <br>";    
        print_r($usr);
?>