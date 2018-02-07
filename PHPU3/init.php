<?php

//phpinfo();
#
#CODIGO REALIZADO POR ALVARO ALMANZA.
#UNIVERSIDAD INTERNACIONAL I DE CASTILLA
#

$login=false;
//crea un array tipo clave-->valor
$usuarios= array('alvaro'=>'almanza', 'fran'=>'revuelta','ignacio'=>'alvarez','jose'=>'isidoro');
//contamos usuarios
echo "El array tiene el siguiente numero de usuarios: ". count($usuarios)."<br>";
//Mostramos los usuarios y su pass
/*foreach ($usuarios as $indice=>$valor)
    {
        echo "El usuario es $indice y su contraseña seria $valor<br>";
    }*/

    
    comprobar_usuario("fran", "revuelta");# llamamos a la funcion que comprueba el usuario
    
    if($login)
        {
            echo "se comprueba login";
        }else
            {
                echo "Condicion de usuario y pass incorrecto";
            }
    
    
function comprobar_usuario($user, $pass){
    global $login; # pasamos a la funcion la variable global para que la funcion la pueda utilizar
    global $usuarios;#pasamos a la funcion la variable global para que la funcion la pueda utilizar
    foreach ($usuarios as $indice=>$valor) #recorremos el array para hacer una serie de tareas
        {
            if(!$login)# si la variable esta a false que haga lo siguiente
                {
                    if(strcmp($user, $indice) ==0 && strcmp($pass, $valor)==0) # esto es para comprobar si el usuario y contraseña coinciden con lo que hay en el array
                        {
                            $login=true;# si user y pass coinciden ponemos esta variable a true
                            echo "comprobando: $indice y pass:$valor<br>"; # comprobacion de que usuario se ha buscado
                        }
                }else # si el login ya esta a true que rompa el for
                    {
                        break;# romper la ejecucion dle for
                    }         
        }
}
