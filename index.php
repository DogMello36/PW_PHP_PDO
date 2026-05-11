<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exemplo PHP PW1</title>
	<link rel="icon" type="img/icon" href="img\icon.png">
	<link rel="stylesheet" href="css\bootstrap.css">
	<link rel="stylesheet" href="css\style.css">
	<style>
		.imagem {
			width: 200px;
			height: auto;
		}
		.cetra{
			text-align: center;
		}
	</style>
</head>

<body>
	<main class="container">
		<h3 class="p-4">Semana 01 - Exemplo 04 - Listagem Geral de Produtos - Imagem</h3>
		<?php
			try {
				// include_once "conexao.php";
				// require "conexao.php";
				// require_once "conexao.php";
				include "conexao.php";

				// ajustando a instrução select para ordenar por produto
				//$query = mysqli_query($conexao, "select * from tabelaimg order by produto");
				//$query = $conexao->query("select * from tabelaimg order by produto");
				$sql = "(select * from tabelaimg)";
				$query = $conexao->query($sql);
				// if (!$query) {
				// 	die('Query Inválida: ' . @mysqli_error($conexao));
				// }
			
				echo "<table class=\"table table-secondary table-hover\">\n";// note que abri echo com aspas para executar
				//comando html e os atributos das tags com apostrofe 
				echo "	<tr>\n
							<th width=\"30px\" align=\"center\">Id</th>\n
							<th width=\"100px\">C&oacute;digo</th>\n
							<th width=\"250px\">Produto</th>\n
							<th width=\"100px\">Valor</th>\n
							<th width=\"200px\">Imagem</th>\n
						</tr>";

				while ($dados = mysqli_fetch_array($query)) {
					echo "<tr>\n";
					echo "<td class=\"centra\">" . $dados['id'] . "</td>\n";
					echo "<td>" . $dados['codigo'] . "</td>\n";
					echo "<td>" . $dados['produto'] . "</td>\n";
					echo "<td> R$ " . number_format($dados['valor'], 2, ",", ".") . "</td>\n";
				// buscando a na pasta imagem
		
				if (empty($dados["imagem"])) {
					$imagem = "SemImagem.png";

				} else {
					$imagem = $dados["imagem"];
				}
				echo "<td><img src=\"img/$imagem\" class = \"foto img-thumbnail shadow\"></td>\n";
				echo "</tr>";
				}
				echo "</table>";

				//mysqli_close($conexao);
				//$conexao = null;
			
			} catch (Exception $e) {
				echo "
				<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">A simple danger alert—check it out! .
				<h2>Aconteceu um erro:<br>\n
					{$e->getMessage()} . </h2>\n
				<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>\n
					</div>\n";
			}
		?>
	</main>
	<script src="js/js\bootstrap.bundle.min.js"></script>
</body>

</html>