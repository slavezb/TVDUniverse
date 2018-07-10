<?php

	$conexao = mysqli_connect("127.0.0.1:3308","root","","cadastro");
	
		if (mysqli_connect_error()){
			echo "Não foi possível conectar: " . mysqli_connect_error();
			exit();
		} 
		
?>
