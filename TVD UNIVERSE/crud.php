<!DOCTYOE html>
<html>
	<head>
		<title>The Vampire Diaries</title>
		<meta charset="UTF-8"/>
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
		
			<article id="entriescrud">
			<article class="postscrud">	
			<fieldset>
<?php
	$opcao = $_POST['tipoCRUD'];
	switch($opcao){
	
		case "C":
			$formulario = "<h3>CREATE</h3>
			<form>
				<button name='button'><a href='postcrud.html'>Post</a></button><br>
				<br>
				<button name='button'><a href='fotocrud.html'>Galeria de Fotos</a></button><br>
				<br>
				<button name='button'><a href='fotocrud2.html'>Fotos Personagens</a></button><br>
				<br>
				<button name='button'><a href='conteudocrud.html'>Conteúdo Livros</a></button><br>
				<br>
				<button name='button'><a href='conteudocrud2.html'>Conteúdo Série</a></button><br>
				<br>
				<center><button name='button'><a href='druc.html'>VOLTAR</a></button><br></center>
			</form>";
		break;
		
		case "R":
			$formulario = "<h3>READ</h3>
			<form>
				<button name='button'><a href='home.php'>Post</a></button><br>
				<br>
				<button name='button'><a href='galeria.html'>Galeria de Fotos</a></button><br>
				<br>
				<button name='button'><a href='personagens.html'>Fotos Personagens</a></button><br>
				<br>
				<button name='button'><a href='livro.html'>Conteúdo Livros</a></button><br>
				<br>
				<button name='button'><a href='serie.html'>Conteúdo Série</a></button><br>
				<br>
				<center><button name='button'><a href='druc.html'>VOLTAR</a></button><br></center>
			</form>";
		break;
		
		case "U":
			$formulario = "<h3>UPDATE </h3>
			<form>
				<button name='button'><a href='postup.html'>Post</a></button><br>
				<br>
				<button name='button'><a href='fotoup.html'>Galeria de Fotos</a></button><br>
				<br>
				<button name='button'><a href='fotoup.html'>Fotos Personagens</a></button><br>
				<br>
				<button name='button'><a href='conteudoup.html'>Conteúdo Livros</a></button><br>
				<br>
				<button name='button'><a href='conteudoup2.html'>Conteúdo Série</a></button><br>
				<br>
				<button name='button'><a href='usuarioup.html'>Usuário</a></button>
				<center><button name='button'><a href='druc.html'>VOLTAR</a></button><br></center>
			</form>";
		break;
		
		case "D":
			$formulario = "<h3>DELETE </h3>
			<form>
				<button name='button'><a href='postdel.html'>Post</a></button><br>
				<br>
				<button name='button'><a href='conteudodel.html'>Conteúdo Livros</a></button><br>
				<br>
				<button name='button'><a href='conteudodel2.html'>Conteúdo Série</a></button><br>
				<br>
				<button name='button'><a href='usuariodel.html'>Usuário</a></button><br>
				<br>
				<center><button name='button'><a href='druc.html'>VOLTAR</a></button><br></center>
			</form>";
		break;
	}
	echo $formulario;
?>
			</fieldset>
			</article>
			</article>
</body>
</html>