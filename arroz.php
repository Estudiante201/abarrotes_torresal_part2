<?php
include('db.php');

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Torresal</title> 
	<link rel="stylesheet" href="./css/productos.css">
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
    <aside>
    	<div style="float: none" class="category_list">
				<br/><br/>
				<a href="arroz.php" class="category_item">Arroz</a><br/><br/>
				<a href="aceite.php" class="category_item">Aceite</a><br/><br/>
				<a href="azucar_endulzantes.php" class="category_item">Azúcar y Endulzantes</a><br/><br/>
				<a href="menestras.php" class="category_item">Menestras</a><br/><br/>
				<a href="conservas.php" class="category_item">Conservas</a><br/><br/>
				<a href="fideos.php" class="category_item">Fideos, Pastas y Salsas</a><br/><br/>
				<a href="salsas_cremas_cond.php" class="category_item">Salsas, Cremas y Condimentos</a><br/><br/>
				<a href="comida instantaneas.php" class="category_item">Comidas Instantáneas</a><br/><br/>
				<a href="chocolateria.php" class="category_item">Chocolatería</a><br/><br/>
				<a href="snacks_piqueos.php" class="category_item">Snacks y Piqueos</a><br/>
    </aside>
    <section>
        <!-- Categoria: Arroz -->
    	<center><h1 class="titulo_categoria">Categoria: Arroz</h1></center>
       <div class="container">
	   <?php
                $sql="SELECT * from producto INNER JOIN categoria ON producto.idCategoria = categoria.idCategoria WHERE categoria.nombreCateg LIKE 'Arroz'";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
    		?>
            <div class="card">
			<form action="carrito.php" method="post">
				<input name="id" type="hidden" value="<?php echo $mostrar['idProducto']?>">
				<input name="nombreProd" type="hidden" value="<?php echo $mostrar['nombreProd']?>">
				<input name="descripcion" type="hidden" value="<?php echo $mostrar['descripcion']?>">
				<input name="precio" type="hidden" value="<?php echo $mostrar['precio']?>">

				<img src="imagenes/categoria/arroz/<?php echo $mostrar['idProducto']?>.jpg">
				<h4><?php echo $mostrar['nombreProd']?></h4>
		        <p><?php echo $mostrar['descripcion']?></p>
			    <label class="precio" >S/.<?php echo $mostrar['precio']?></label>
			    <label class="stock" >Stock: <?php echo $mostrar['stock']?></label>
			    <br/>
			    <input name="cantidad" type="number" value="1" size="3">
		        <input name="btnAgregar" type="submit" value="Añadir al Carrito">
			</form>
		    </div>
			<?php
		     }
		     ?>
        </div>
		

    </section>


</body>
</html>