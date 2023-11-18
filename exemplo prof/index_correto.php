<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="seu nome" />
		<meta name="description" content="programa��o em php" />	
		<title> Exemplo 02 </title>
		<link rel="stylesheet" href="style.css">
	
	</head>
<body>
<h3>Exemplo 02 - Listagem Geral de Produtos - Imagem</h3>
<?php
	include_once('conexao.php');
	
	// ajustando a instru��o select para ordenar por produto
	$query = mysqli_query($conexao,"select * from tabelaimg order by produto");

	if (!$query) {
		die('Query Inv�lida: ' . @mysqli_error($conexao));  
	}

	echo "<table border='1px'>";
	echo "<tr><th width='30px' align='center'>Id</th>
	<th width='100px'>C�digo</th>
	<th width='250px'>Produto</th>
    <th width='100px'>Valor</th>
    <th width='100px'>Imagem</th><tr>";

	while($dados=mysqli_fetch_array($query)) 
	{
		echo "<tr>";
		echo "<td align='center'>". $dados['id']."</td>";
		echo "<td>". $dados['codigo']."</td>";
		echo "<td>". $dados['produto']."</td>";
		echo "<td align='right'> R$ ". $dados['valor']."</td>";		
		// buscando a na pasta imagem
		echo "<td> <img src='imagens/".$dados['imagem']."' </td>";
		echo "</tr>";
		}
	echo "</table>";
	
	mysqli_close($conexao);
?>
</body>
</html>
