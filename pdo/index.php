<?php 
	$dns = 'mysql:host=localhost; port=3366; dbname=testes; charset=utf8';
	$usuario = 'root';
	$senha = 'root';
	
	$opcoes = [
		PDO::ATTR_PERSISTENT => true
		];
		try {
			$pdo = new PDO($dns, $usuario, $senha, $opcoes);
		}catch (PDOException $e) {
			exit('Erro: ' . $e -> getMessage());
		}
$funionarios = $pdo -> query('SELECT id, nome, email FROM funcionario');
?>

<table border="1">
	<tr>
		<td>Id</td>
		<td>Nome</td>
		<td>Email</td>
	</tr>
	<?php while($campo = $resultado -> fetch_assoc()): ?>
		<tr>
			<td><? =$campo['id'];?></td>
			<td><? =$campo['nome'];?></td>
			<td><? =$campo['email'];?></td>
		</tr>
	<?php endwhile ?>
</table>
	
	
	
	
	
	
	
	
	
	
	
	
	
	