
<?php
	include "conecta_mysql.php";
	
		
	  $query = "INSERT INTO livros (titulo, sinopse) VALUES ('".$titulo."', '".$conteudo."')";
	  
	  $insert = mysqli_prepare($conexao,$query);
	  mysqli_query($conexao,$query);
	  
	  echo mysqli_error($conexao);
	  
	  mysqli_close($conexao);
	  
?>
