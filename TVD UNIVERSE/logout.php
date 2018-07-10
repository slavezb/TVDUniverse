<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>The Vampire Diaries</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
<?php

	$username = $_POST['username'];
	$senha = $_POST['senha'];
	
	session_start();
	if ((isset ($_SESSION['username']) == true) and (isset ($_SESSION['senha']) == true)){
		unset ($_SESSION['username']);
		unset ($_SESSION['senha']);
		
		session_destroy();
		header('location: home.php');
		echo "<center><h2>Até a próxima $username :D </h2></center>";
				} else{
					echo "<center><h2>Você ainda não está logado !!!</h2></center>";
					header('location: login.php');
				}

?>
</body>
</html>
