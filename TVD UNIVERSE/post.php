<?php	
	session_start();
	if(!isset($_SESSION["username"]) || !isset($_SESSION["senha"])) {
		header("location: login.php");
		exit;
	} 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>The Vampire Diaries</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header id="topbarbg"></header>

	<header id="topbar">
		<nav class="navigation">
			<a href="home.php">Home</a>
			<a href="serie.html">Série</a>  
			<a href="livro.html">Livros</a> 
			<a href="personagens.html">Personagens</a>
			<a href="galeria.html">Galeria</a>
			<a href="acesso.html">Acessar</a>
		</nav>
	</header>
	
<article id="entries5">
	<article class="postepost">
		<form method="POST" action="validapost.php"> 
			<fieldset>
								
				<label for="texto"><b>Titulo: </b></label>
				<input type="text" name="texto" id="texto" size="50"></input>
				<span class="style1">*</span><br>
				<br>
				
				<label for="texto"><b>Texto: </b></label><textarea name="textarea" id="textarea" rows="10" cols="80"></textarea>
				<span class="style1">*</span><br>
				<br>
																
				<p><input type="submit" value="Enviar Post" name="enviar" >
				<span class="style1">* Campos com * são obrigatórios!</p></span>
				<center><button name='button'><a href='acesso.html'>VOLTAR</a></button><br></center>
				
			</fieldset>
		</form> 
	</article><br>
	
</article>
	
</body>
</html>