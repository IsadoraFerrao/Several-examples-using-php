<!DOCTYPE html>
<html>
<head>
	<title>Formulario Teste</title>
</head>
<body>
<?php $action = $_SERVER["PHP_SELF"]; 
?>
<form method="POST" action="">
	<label>Nome</label>
	<input type="text" name="nome"></input><br />
	<label>Email</label>
	<input type="text" name="email"></input><br />
	<label>Facebook</label>
	<input type="text" name="facebook"></input><br />
	<label>Sexo</label>
	<label><input type="radio" name="sexo" value="feminino"></input>Feminino</label>
	<label><input type="radio" name="sexo" value="masculino"></input>Masculino</label>
	<br /><br />
	<input type="submit" name="submit" value="Enviar"></input>
	<!-- Comentário em HTML -->
</form>
<h3>Os dados enviados foram:</h3>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $email = $sexo = $face = "";
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$sexo = $_POST["sexo"];
		$face = $_POST["facebook"];
		echo $nome;
		echo "<br />";
		echo $email;
		echo "<br />";
		echo $face;
		echo "<br />";
		echo $sexo;
	}
?>
</body>
</html>











