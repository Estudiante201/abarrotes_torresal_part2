<?php
include('db.php');

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Torresal</title> 
	<link rel="stylesheet" href="./css/crear_cuenta.css">
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
            <a class="botones" href="">S/<?php echo $_SESSION['totalCarrito'] ?> 🛒</a>
            <?php }else{ ?>
            <a class="botones" href="mostrarCarrito.php">S/0.0 🛒</a>
            <?php } ?>
		</nav>
    </header>
    <div class="login-box">
      <h1>Regístrate</h1>
      <form action="" method="post">

        <label for="username">Nombre</label>
        <input type="text" placeholder="Enter Nombre">

        <label for="username">Apellidos</label>
        <input type="text" placeholder="Enter Apellidos">

        <label for="username">DNI</label>
        <input type="text" placeholder="Enter DNI">

        <label for="username">Celular</label>
        <input type="text" placeholder="Enter Celular">

        <label for="username">Email</label>
        <input type="text" placeholder="Enter Email">

        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password">
        <input type="submit" value="Crear cuenta">

      </form>
    </div>
</body>
</html>