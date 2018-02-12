<!DOCTYPE html>
<!--
CODIGO REALIZADO POR ALVARO ALMANZA.
UNIVERSIDAD INTERNACIONAL I DE CASTILLA
-->
<?php
session_start();
include 'init.php';
$datos=$_POST['delcoche'];
$indice=0;
$del=false;
foreach ($_SESSION["ListCar"] as $row) 
            {
                    if(!$del)
                    {
                        if(strcmp($datos, $row['matricula']) ==0) 
                            {
                                $del=true;
                                unset($coches[$indice]);
                            }
                    }else # si el login ya esta a true que rompa el for
                        {
                            break;# romper la ejecucion dle for
                        }
                        $indice++;
            }
 print_r($coches);
