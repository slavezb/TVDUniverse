		<?php
			$nome=$_POST["nome"];
			$id=$_POST["id"];

			$erro = 0;
			
		if (empty($nome) OR strstr($nome, ' ')==FALSE){
			echo "Preencher o campo NOME corretamente.</br>";
			$erro = 1;
		}
		
		if (strlen($id) <2 OR strstr($id, ' ')==FALSE){
			echo "Preencher o campo ID corretamente.</br>";
			$erro = 1;
		}
		
		
		if ($erro == 0) {
			include 'etapa2a.php';
		}
	
		?>

