<?php
$root=admin;
$pass=admin;
$datos=$_GET["usuario"];
if(root==datos[nombre] && pass==datos[contrasenia])
    {
        include 'principal.html';
    }else
        {
            include 'modal.html';
        }

?>


