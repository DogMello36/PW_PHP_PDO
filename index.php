<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exemplo PHP PW1</title>
	<link rel="icon" type="img/icon" href="imagens\icons8-php-64.png">
	<link rel="stylesheet" href="css\bootstrap.css">
	<style>
		.imagem {
			width: 200px;
			height: auto;
		}
	</style>
</head>

<body>
	<main class="container">

		<?php
			try {
				// include_once "conexao.php";
				// require "conexao.php";
				// require_once "conexao.php";
				include "conexao.php";

				// ajustando a instrução select para ordenar por produto
				//$query = mysqli_query($conexao, "select * from tabelaimg order by produto");
				$query = $conexao->query("select * from tabelaimg order by produto");
				// if (!$query) {
				// 	die('Query Inválida: ' . @mysqli_error($conexao));
				// }
			
				echo "<table class=\"table table-secondary table-hover\">";// note que abri echo com aspas para executar
				//comando html e os atributos das tags com apostrofe 
				echo '<tr>
							<th width="30px" align="center">Id</th>
							<th width="100px">C&oacute;digo</th>
							<th width="250px">Produto</th>
							<th width="100px">Valor</th>
							<th width="200px">Imagem</th>
						</tr>';

				while ($dados = mysqli_fetch_array($query)) {
					echo "<tr>";
					echo "<td align='center'>" . $dados['id'] . "</td>";
					echo "<td>" . $dados['codigo'] . "</td>";
					echo "<td>" . $dados['produto'] . "</td>";
					echo "<td align='center'> R$ " . $dados['valor'] . "</td>";
					// buscando a na pasta imagem
					echo "<td><img src='img/" . $dados['imagem'] . "' class='imagem'></td>";
					echo "</tr>";
				}
				echo "</table>";

				//mysqli_close($conexao);
				//$conexao = null;
			
			} catch (Exception $e) {
				echo "
				<div class=\"alert alert-danger\" role=\"alert\">A simple danger alert—check it out! .
				<h2>Aconteceu um erro:<br>\n
					{$e->getMessage()} . </h2>\n
					</div>\n";
			}
		?>
	</main>
	<script src="js/js\bootstrap.bundle.min.js"></script>
</body>

</html>