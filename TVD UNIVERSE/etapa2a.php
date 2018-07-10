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
	
<article id="entriest2">
	<article class="postet2">
	<section id="titulot2">Cadastrando !!</section><br>
		<form method="POST" action="etapa3.php"> 
			<fieldset><br>
				<input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 
				<input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>"> 
				<input type="hidden" name="sexo" value="<?php echo $sexo; ?>"> 
				<input type="hidden" name="profissao" value="<?php echo $profissao; ?>"> 
				
				<label for="ddd"><b> DDD:</b></label>
				<input type="text" name="ddd" id="ddd" size="4" maxlength="3" /><label for="telefone"><b>    Telefone: </b></label>
				<input type="tel" name="telefone" id="telefone" size="30" maxlength="9">
				<span class="style1">*</span><br>
				<br>
					
				<label for="rua"><b>Rua:</b></label>
				<input type="text" name="rua"><label for="numero"><b>     Número:</b></label>
				<input type="text" name="numero" size="4" maxlength="4">
				<span class="style1">*</span><br>
				<br>
				
				<label for="bairro"><b>Bairro: </b></label>
				<input type="text" name="bairro">
				<span class="style1">*</span><br>
				<br>
								
				<label for="cidade"><b>Cidade: </b></label>
				<input type="text" name="cidade" id="cidade" maxlength="20" size="46">
				<span class="style1">*</span><br>
				<br>
				
				<label for="estado"><b>Estado: </b></label>
				<select name="estado"> 
					<option value="ac">Acre</option> 
					<option value="al">Alagoas</option> 
					<option value="am">Amazonas</option> 
					<option value="ap">Amapá</option> 
					<option value="ba">Bahia</option> 
					<option value="ce">Ceará</option> 
					<option value="df">Distrito Federal</option> 
					<option value="es">Espírito Santo</option> 
					<option value="go">Goiás</option> 
					<option value="ma">Maranhão</option> 
					<option value="mt">Mato Grosso</option> 
					<option value="ms">Mato Grosso do Sul</option> 
					<option value="mg">Minas Gerais</option> 
					<option value="pa">Pará</option> 
					<option value="pb">Paraíba</option> 
					<option value="pr">Paraná</option> 
					<option value="pe">Pernambuco</option> 
					<option value="pi">Piauí</option> 
					<option value="rj">Rio de Janeiro</option> 
					<option value="rn">Rio Grande do Norte</option> 
					<option value="ro">Rondônia</option> 
					<option value="rs">Rio Grande do Sul</option> 
					<option value="rr">Roraima</option> 
					<option value="sc">Santa Catarina</option> 
					<option value="se">Sergipe</option> 
					<option value="sp">São Paulo</option> 
					<option value="to">Tocantins</option> 
				</select>
				<span class="style1">*</span><br>
				<br>
								
				<label for="cep"><b>CEP: </b></label>
				<input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
				<span class="style1">*</span><br>
				<br>	
				
				<input type="submit" value="Prosseguir  >>" name="enviar" >
				<span class="style1"><i>* Campos com * são obrigatórios!</i></span>
				<br>
				<br>
			</fieldset>
		</form>
	</article><br>
	
</article>
	
</body>
</html>