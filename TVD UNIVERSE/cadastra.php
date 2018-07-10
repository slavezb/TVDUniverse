<html>
<head>
	<meta charset="UTF-8">
	<title> The Vampire Diaries </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript">
	function loginsuccessfully() {
		setTimeout("window.location='home.php'", 1200);
	}
	
	function loginfailed() {
		setTimeout("window.location='etapa3a.php'", 1200);
	}
	</script>	
</head>
<body img alt src="fundophp.jpeg">
	
<?php

	$nome= $_POST['nome'];
	$email= $_POST["email"];
	$datanascimento= $_POST["datanascimento"];
	$php_date = date_create('2000-01-01');
	$sexo= $_POST["sexo"];
	$profissao= $_POST["profissao"];
	$ddd = $_POST["ddd"];
	$bairro = $_POST["bairro"];
	$telefone= $_POST["telefone"];
	$numero= $_POST["numero"];
	$rua= $_POST["rua"];
	$cidade= $_POST["cidade"];
	$estado= $_POST["estado"];
	$cep= $_POST["cep"];
	$username= $_POST["username"];
	$senha= sha1($_POST["senha"]);
	$confirma_senha= sha1($_POST["confirma_senha"]);         
	
	
	$erro = 0;
		
		if(empty($username) || strlen($username) < 2){
			echo "Você deve preencher o campo USERNAME corretamente.<br />";
		$erro = 1;
		}
		
		if($confirma_senha != $senha){
			echo "As senhas não conferem !!<br />";
			$erro = 1;
		}
				
		if($erro == 0){
			include "create.php";
			echo "<script>loginsuccessfully()</script>";
			echo "<center><h2>Cadastro Realizado com Sucesso *-*</h2></center>";
			} else {
                    echo "<center><h2>Cadastro não realizado. Por favor Tente novamente.</h2></center>";
					echo "<script>loginfailed()</script>";
					
              }
		
	?>
</body>
</html>