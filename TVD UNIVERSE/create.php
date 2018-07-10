<?php
	include "conecta_mysql.php";
	
		
	  $query = "INSERT INTO usuariostvd (nome, email, datanascimento, sexo, profissao, ddd, telefone, numero, rua, bairro, cidade, cep, senha, username, confirma_senha,id) VALUES ('".$nome."', '".$email."', '".$datanascimento."' , '".$sexo."', '".$profissao."' , '".$ddd."' , '".$telefone."', '".$numero."', '".$rua."', '".$bairro."', '".$cidade."', '".$cep."', '".$senha."', '".$username."', '".$confirma_senha."', NULL)";
	  
	  $insert = mysqli_prepare($conexao,$query);
	  mysqli_query($conexao,$query);
	  
	  echo mysqli_error($conexao);
	  
	  mysqli_close($conexao);
	  
?>
