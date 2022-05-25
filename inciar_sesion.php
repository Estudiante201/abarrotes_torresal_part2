<?php
include('db.php');

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Torresal</title> 
	<link rel="stylesheet" href="./css/login.css">
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
    <div class="login-box">
      <img src="imagenes/login/logo.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar Sesión</h1>
      <form action="" method="post">

        <label for="username">Email</label>
        <input type="text" placeholder="Enter Email">

        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password">
        <input type="submit" value="Ingresar">
       
        <div class="btnRegistrar">
        <p>¿Eres nuevo?</p><a class="botonRegistrate" href="crear_cuenta.php">Registrate</a></div>

      </form>
    </div>
</body>
</html>