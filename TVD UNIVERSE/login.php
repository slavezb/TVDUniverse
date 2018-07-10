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
	
<article id="entriest4">
	<article class="postet4">
	<section id="titulot1">Login</section><br>
		<form method="POST" action="validalogin.php"> 
		<fieldset><br>
			<label for="username"><u>Username: </u></label><br>
				<input type="text" name="username" id="username" size="30">
				<br>
				<br>
			<label for="senha"><u>Senha: </u></label><br>
				<input type="password" name="senha" id="senha" size="30" maxlength="8">
				<br>
				<br>
			<u><input type="submit" value="Entrar" name="enviar" >
			<br></u>
			</fieldset>
		</form>
	</article><br>
	
</article>
	
</body>
</html>