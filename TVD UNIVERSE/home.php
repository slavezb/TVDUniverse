
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>The Vampire Diaries</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body img alt src="floresta.jpg">
   
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

	<article id="navlinksbg">
		<section id="navlinksbg2">The Vampire Diaries</section>
	</article>

	<article id="sidebar">
		<section id="sidebarimage"><img alt src="caixa.jpg"/></section>
		</article>
		<br>
	
<article id="entries">
	<article class="posts">
	<?php
	include "conecta_mysql.php";
	
	$resultado = mysqli_query($conexao, "SELECT * from paginacao") or die ("Não foi poss~ivel executar a SQL: ".mysqli_error($conexao));
		if ($resultado){
			while($row = mysqli_fetch_array($resultado)){
				echo "<p style='background-color: #FFCCCC; padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px; text-align: justify;'>".$row["titulo"]. " <br/></br> ".$row["texto"]. "<br/> </p> ";
			}
		}
	
	mysqli_close($conexao);
	?>
</article><br>
</article>

	</article>
</body>
</html>