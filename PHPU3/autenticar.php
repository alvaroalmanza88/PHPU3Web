<?php
$root="admin";
$pass="admin";
$datos=$_POST["usuario"];
//echo $datos["nombre"];
if(strcmp($root, $datos["nombre"]) == 0)
    {
        echo "Usuario registrado";
        include 'principal.html';
    }else
        {
            echo "Algo ha fallado";
            include 'modal.html';
        }


