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
	
<article id="entriest3">
	<article class="postet3">
	<section id="titulot3">Finalizando !!</section><br>
		<form method="POST" action="cadastra.php"> 
			<fieldset>
			<br>
				<input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 
				<input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>"> 
				<input type="hidden" name="sexo" value="<?php echo $sexo; ?>"> 
				<input type="hidden" name="profissao" value="<?php echo $profissao; ?>"> 
				<input type="hidden" name="ddd" value="<?php echo $ddd; ?>"> 
				<input type="hidden" name="bairro" value="<?php echo $bairro; ?>"> 
				<input type="hidden" name="telefone" value="<?php echo $telefone; ?>"> 
				<input type="hidden" name="rua" value="<?php echo $rua; ?>"> 
				<input type="hidden" name="numero" value="<?php echo $numero; ?>">
				<input type="hidden" name="cidade" value="<?php echo $cidade; ?>"> 
				<input type="hidden" name="estado" value="<?php echo $estado; ?>"> 
				<input type="hidden" name="cep" value="<?php echo $cep; ?>"> 

				<label for="username"><b>Username: </b></label>
				<input type="text" name="username" id="username" size="30">
				<span class="style1">*</span><br>
				<br>
				
				<label for="senha"><b>Senha: </b></label>
				<input type="password" name="senha" id="senha" size="30" maxlength="8">
				<span class="style1">* (8 caracteres)</span><br>
				<br>
				
				<label for="confirma_senha"><b>Confirme sua Senha: </b></label>
				<input type="password" name="confirma_senha" id="confirma_senha" size="30" maxlength="8">
				<span class="style1">*</span><br>
				<br>
							
				<input type="submit" value="Finalizar Cadastro" name="fim">
				<span class="style1"><i>* Campos com * são obrigatórios!</i></span>
				<br>
				<br>
			</fieldset>
		</form> 
	</article><br>
	
</article>
	
</body>
</html>