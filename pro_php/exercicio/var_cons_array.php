<!DOCTYPE html>
<html>
<head>
	<title>Exercício de Variáveis - Constantes - Array</title>
	<meta charset="utf-8">
</head>
<body>

<?php 
	define(CARRO, 'Fusca');
	define(ANO, '1982');
	define(TABELA, 'carros');

	$dono = 'Patrick Mazulo de Brito';
	$valor = '1.500,00';

	$opcionais = array(
		'rodas' => 'Liga leve',
		'som' => 'mp3 sony',
		'outros' => 'AC, TE, Alarme'
	);
?>

<h1>Modelo do carro: <?php echo CARRO; ?></h1>
<h2>Ano: <?php echo ANO; ?></h2>
<p>O vendendor deste carro é: <strong><?php echo $dono; ?></strong></p>
<p>Valor R$: <strong><?php echo $valor; ?></strong></p>

<ul>
	<?php 
		foreach ($opcionais as $key => $value) {
			echo "<li>";
			echo $key.' - '.$value;
			echo "</li>";
		}
	?>
</ul>

<?php
	$campos = implode(',', array_keys($opcionais));
	$valores = "'".implode("','", array_values($opcionais))."'";

	echo $cadastro = "INSERT INTO ".TABELA." (".$campos.") VALUES (".$valores.")";

?>

</body>
</html>