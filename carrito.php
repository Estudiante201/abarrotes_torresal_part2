<?php
session_start();
 if (isset($_SESSION['carrito'])) {
 	$carrito_mio=$_SESSION['carrito'];
 	if(isset($_POST['btnAgregar'])){
 		$id=$_POST['id'];
 		$nombreProd=$_POST['nombreProd'];
 		$descripcion=$_POST['descripcion'];
 		$precio=$_POST['precio'];
 		$cantidad=$_POST['cantidad'];

 		$carrito_mio[]= array('id' =>$id ,'nombreProd' =>$nombreProd ,'descripcion' =>$descripcion ,'precio' =>$precio ,'cantidad' =>$cantidad );
 	}

 }else{
 	    $id=$_POST['id'];
 		$nombreProd=$_POST['nombreProd'];
 		$descripcion=$_POST['descripcion'];
 		$precio=$_POST['precio'];
 		$cantidad=$_POST['cantidad'];

 		$carrito_mio[]= array('id' =>$id ,'nombreProd' =>$nombreProd ,'descripcion' =>$descripcion ,'precio' =>$precio ,'cantidad' =>$cantidad );
 }


 $total=0;
 for($i=0;$i<count($carrito_mio);$i ++){
    if($carrito_mio[$i]!=NULL){
    	$total += $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];
    }
 }

 $_SESSION['carrito']=$carrito_mio;
 $_SESSION['totalCarrito']=$total;

 header("location: ".$_SERVER['HTTP_REFERER']);
?>