<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<?php

//crea un array tipo clave-->valor
$usuarios= array(
    array('usuario'=>'admin', 'pass'=>'admin', 'dir'=>'calle madrid', 'telefono'=>'111111111', 'correo'=>'hola@hola'),
    array('usuario'=>'alvaro', 'pass'=>'almanza', 'dir'=>'calle madrid', 'telefono'=>'111111111', 'correo'=>'hola@hola'));
$coches= array
        (
            array('matricula'=>'1234abc','contacto'=>'666666666','marca'=>'ford','color'=>'rojo','observaciones'=>'hola','motivo'=>'el motivo')
        );
$_SESSION["ListUser"]=$usuarios;
$_SESSION["ListCar"]=$coches;