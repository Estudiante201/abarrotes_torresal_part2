<?php
include('db.php');

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Torresal</title> 
	<link rel="stylesheet" href="./css/formularioPagar.css">
</head>  
<body>
<header><label class="nombreParte1">Abarrotes</label>
		<label class="nombreParte2">Torresal&nbsp; </label>
		<nav style="float:right">
			<a class="botones" href="index.php">Inicio&nbsp;</a>
			<a class="botones" href="arroz.php">Productos&nbsp;</a>
			<a class="botones" href="crear_cuenta.php">Crear cuenta&nbsp;</a>
			<a class="botones" href="inciar_sesion.php">Iniciar sesión</a>
			<?php
               if (isset($_SESSION['carrito'])) { 
            ?>
			<a class="botones" href="mostrarCarrito.php">S/<?php echo $_SESSION['totalCarrito'] ?> 🛒</a>
		    <?php }else{ ?>
			<a class="botones" href="">S/0.0 🛒</a>
			<?php } ?>
		</nav>
    </header>
	  		<section>
    		<div>
    			
    			<form action="formularioTarjeta.php" method="post">
    				<div class="container1">
    					<h1>INFORMACION PERSONAL</h1>
    					<div class="informacionPersonal"><label class="datosPersonal">Nombre</label><input type="text" name="nombre" required></div>
    					<div class="informacionPersonal"><label class="datosPersonal">Apellido</label><input type="text" name="apellido" required></div>
    					<div class="informacionPersonal"><label class="datosPersonal">DNI</label><input type="text" maxlength="8" name="dni"></div>
    					<div class="informacionPersonal"><label class="datosPersonal">Celular</label><input type="text" maxlength="9" name="celular" required></div>
    					<div class="informacionPersonal"><label class="datosPersonal">Email</label><input type="email" name="correo" required></div>
    				</div>

    				<div class="container2">
    					<h1>Información de la Tarjeta</h1>

    					<div class="informacionReserva">
    					Tarjeta:&nbsp;&nbsp;<input type="radio" name="tarjeta" value="VISA">VISA
    					        <input type="radio" name="tarjeta" value="MASTERCARD">MASTERCARD
    				</div>

    					<div class="informacionReserva"><label class="datosReserva">Titular de la tarjeta: </label>
    						<input type="text" name="titular" placeholder="Nombre" required></div>
    					<div class="informacionReserva"><label class="datosReserva">Número de tarjeta: </label>
    						<input type="text" name="numeroTarjeta" maxlength="16" placeholder="0000 0000 0000 0000" required></div>
    					<div class="informacionReserva"><label class="datosReserva">Fecha de caducidad: </label>
    						<input type="text" name="mes" size="2" maxlength="2" placeholder="MM" required> / 
    						<input type="text" name="anio" size="2" maxlength="2" placeholder="YY" required>
    					</div>
    					<div class="informacionReserva"><label class="datosReserva">CVC: </label><input type="text" name="cvc" size="3" maxlength="3" placeholder="000" required></div>
    				
    				</div>

    				<div class="informacionReserva"><input type="submit" name="btnProcesar" value="Procesar"></div>
    			</form>
    		</div>
    	</section>	  
</body>
</html>