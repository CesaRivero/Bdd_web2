<?php


if(mysqli_connect('localhost','root','','carrito')){
	
	print "<h1>Ficha</h1>";
	
	
	if(isset($_GET['productos'])){
		$codigo = $_GET['productos'];
		print $codigo;
		$con = mysqli_connect('localhost','root','','carrito');
		$consulta = "SELECT * FROM productos WHERE codigoProducto=$codigo";
		
		
		if($resultado = mysqli_query($con, $consulta)){
			
				while($fila = mysqli_fetch_array($resultado) ){
					print "<div>";
						print "<h2>$fila[nombreProducto]</h2>";
						print "<p>Precio: $fila[precioProducto]</p>";
                        print "<p>Cantidad: $fila[cantidadProducto]</p>";
						print "<p>Descripcion: $fila[descripcionProducto]</p>";
                        print "<p>Detalle: $fila[detallesProducto]</p>";
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