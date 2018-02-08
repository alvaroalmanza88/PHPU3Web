<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
	<link type="text/css" href="./../css/style.css" rel="stylesheet" />
</head>

<body>
	<div id="registrar">
          	<a href="../index.php"</a>Regresar</a>
    </div>
	<div id="envoltura">
		<div id="contenedor">
	
			<div id="cabecera">
                            <img src="./../css/images/Casa_Targaryen_estandarte.png" width="50" height="75" >
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="agregar.php" method="post" >
					
					<p><label for="nombre">Nombre:</label></p>
						<input name="nombre" type="text" id="nombre" class="nombre" placeholder="Nombre del Usuario" autofocus=""/></p>
						<div id="mensaje1" class="errores"> Ingresa solo caracteres</div>
					<!--=============================================================================================-->
					<!-- En seguida de cada input se agregará un div con el mensaje de error-->
					<p><label for="direccion">Dirección:</label></p>
						<input name="direccion" type="text" id="direccion" class="direccion" placeholder="Dirección del Usuario" /></p>
					    <div id="mensaje2" class="errores"> Ingresa solo caracteres</div>
					<!--=============================================================================================-->
                                            <p><label for="telefono">Teléfono:</label></p>
						<input name="telefono" type="text" id="telefono" class="telefono" placeholder="Telefono del Usuario" /></p>
					    <div id="mensaje2" class="errores"> Ingresa solo caracteres</div>
					<p><label for="correo">Correo:</label></p>
						<input name="correo" type="text" id="correo" class="correo" placeholder="Pon tu mail" /></p>
						<div id="mensaje3" class="errores"> Mail no valido</div>
						
					<p><label for="pass">Password:</label></p>
						<input name="pass" type="password" id="pass" class="pass" placeholder="Pon tu contraseña" required=""/></p>
					
					<p><label for="repass">Repetir Password:</label></p>
						<input name="repass" type="password" id="repass" class="repass" placeholder="Repite contraseña" required="" /></p>
						<div id="mensaje4" class="errores"> Passwords incorrectos</div>
						
					<p id="bot"><input name="submit" type="submit" id="boton" value="Registrar" class="boton"/></p>
				</form>
			</div>
	
			<div id="pie">Sistema de Registro</div>
		</div><!-- fin contenedor -->
	</div>	
</body>
</html>
<?php 
include 'init.php';