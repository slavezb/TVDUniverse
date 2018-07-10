<html>
<head>
	<meta charset="UTF-8">
	<title>The Vampire Diaries</title>
	
	<script type="text/javascript">
	function loginsuccessfully() {
		setTimeout("window.location='home.php'", 2000);
	}
	
	function loginfailed() {
		setTimeout("window.location='conteudocrud2.html'", 1200);
	}
	</script>	
</head>
<body>
		<?php

			$titulo = $_POST["texto"];
			$conteudo = $_POST["textarea"];
		
			$erro = 0;		
			
			if(empty($titulo) || strlen($titulo) < 2){
					echo "Voce deve preencher o campo titulo corretamente.<br />";
					$erro = 1;
				}
			
			if(empty($conteudo) || strlen($conteudo) < 10){
					echo "Voce deve preencher o campo texto corretamente.<br />";
					$erro = 1;
			}
							
			
			if ($erro==0) {
				echo "<script>loginsuccessfully()</script>";
				echo '<h3><center>OPERAÇÃO REALIZADA COM SUCESSO !! :D<center><h3>';
					include 'inseretemporada.php';
				} else {
					echo "<script>loginfailed()</script>";
				}
				
			
		?>
</body>
</html>