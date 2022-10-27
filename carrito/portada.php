<?php

if(mysqli_connect('localhost','root','','carrito')){
	
	print "<h1>Portada</h1>";
	
	
	if(isset($_GET['categoria'])){
		$codigo = $_GET['categoria'];
		
		$con = mysqli_connect('localhost','root','','carrito');
		$consulta = "SELECT nombreProducto, codigoProducto, precioProducto, descripcionProducto, categoriaProducto FROM productos WHERE categoriaProducto=$codigo";
		
		
		if($resultado = mysqli_query($con, $consulta)){
			
				while($fila = mysqli_fetch_array($resultado) ){
					print "<div>";
						print "<h2><a href=ficha.php?productos=$fila[codigoProducto]> $fila[nombreProducto]</a></h2>";
						print "<p>Precio: $fila[precioProducto]</p>";
						print "<p>Descripcion: $fila[descripcionProducto]</p>";
					print "</div>";
				
			
		}
		
		
			
		
	}else{
		print "<h1>Algo se rompio</h1>";
	}
		
		
		
		
		
	}
	
	
	
}else{
	
	print "<h1>No ta funkando</h1>";
}





?>