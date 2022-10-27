<?php

if(mysqli_connect('localhost','root','','carrito')){
	
	print "<h1>Ta todo bien</h1>";
	
	$con = mysqli_connect('localhost','root','','carrito');
	$consulta = "SELECT idCategoria, categoria FROM categorias";
	
	if($resultado = mysqli_query($con, $consulta)){
		print "<ul>";
		while($fila = mysqli_fetch_array($resultado) ){
			print "<li>";
				print "<a href=portada.php?categoria=$fila[idCategoria]> $fila[categoria] </a>";
			print "</li>";
			
			
		}
		
		
		print "</ul>";
		
	}else{
		print "<h1>Algo se rompio</h1>";
	}
	
	
}else{
	
	print "<h1>No ta funkando</h1>";
}






?>