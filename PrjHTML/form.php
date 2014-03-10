<?php 
		
		$name = $_POST["nome"];
		$cpf = $_POST["cpf"];
		$user = $_POST["usuario"];
		$passw = $_POST["senha"];
		$mail = $_POST["email"];
		$city = $_POST["cidade"];
	?>
<html>
<head>
	<title>Mostrando dados</title>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="2; url=/aula3/">
</head>
<body>

	

	<table>
		<tr>
			<td>Nome do usuário</td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td>CPF</td>
			<td><?php echo $cpf; ?></td>
		</tr>
		<tr>
			<td>Usuário</td>
			<td><?php echo $user; ?></td>
		</tr>
		<tr>
			<td>Senha </td>
			<td><?php echo "Aquela que você escolheu" ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $mail; ?></td>
		</tr>
		<tr>
			<td>Cidade</td>
			<td><?php echo $city; ?></td>
		</tr>
	</table>

</body>
</html>
