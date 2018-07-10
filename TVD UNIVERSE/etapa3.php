		<?php
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			$datanascimento=$_POST["datanascimento"];
			$sexo=$_POST["sexo"];
			$profissao=$_POST["profissao"];
			$telefone=$_POST["telefone"];
			$ddd=$_POST["ddd"];
			$bairro=$_POST["bairro"];
			$rua=$_POST["rua"];
			$numero=$_POST["numero"];
			$cidade=$_POST["cidade"];
			$estado=$_POST["estado"];
			$cep=$_POST["cep"];		

			$erro = 0;
			
				if(empty($ddd) || strlen($ddd) > 3) {
					echo "Preencher o campo DDD corretamente.</br>";
					$erro = 1;
				}

				if(empty($telefone) || strlen($telefone) < 8){
					echo "Preencher o campo TELEFONE corretamente.</br>";
					$erro = 1;
				}
				
				if(empty($rua)){
					echo "preencher o campo RUA corretamente.<br />";
					$erro = 1;
				}

				if(empty($numero) OR (!is_numeric($numero))) {
					echo "Preencher o campo NUMERO corretamente.<br />";
					$erro = 1;
				}

				if(empty($bairro)){
					echo "Preencher o campo BAIRRO corretamente.</br>";
					$erro = 1;
				}
				
				if(empty($cidade)){
					echo "Preencher o campo CIDADE corretamente.</br>";
					$erro = 1;
				}
				
				if(empty($estado) == 2) {
					echo "Preencher o campo ESTADO corretamente</br>";
					$erro = 1;
				}
				
				if(empty($cep) || strlen($cep) > 9){
					echo "Preencher o campo CEP corretamente.</br>";
					$erro = 1;
				}
				
			
			if ($erro == 0) {
					include 'etapa3a.php';
				}
			
		?>
