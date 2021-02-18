<?php 
	$db = new mysqli('localhost', 'root', 'root', 'testes');
	$db -> set_charset('utf-8');
	
	if($db -> connect_erro > 0) {
		die('Não foi possível realizar a conexão[' . $db  -> connect_error . ']');
	}
	
	//realiza a primeira consulra ao db
	$sql = 'SELECT id, nome, email FROM funcionario';
	
	if(!$resultado = $db -> query($sql)) {
	die('Erro ao executar a pesquisa [' . $db -> error. ']');
	}
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	