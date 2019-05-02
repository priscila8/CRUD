<?php
function connect(){
	$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
	$user = 'root';//root
	$password = ''; //senha vazia
	try{
		$dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}
	return $dbh;
}


function listar(){
	$dbh = connect();
	$sql = 'SELECT * FROM funcionario';
	foreach ($dbh->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['data']."</td>";
      echo "<td>".$row['salario']."</td>";
      echo "<td><a class='btn btn-secondary' href=editar.php?id=".$row['id'].">Editar</a></td>";
      echo "<td><a class='btn btn-secondary' href=excluir.php?id=".$row['id'].">Excluir</a></td>";
      echo "</tr>";
    }
}

function insere($nome, $data, $sal){
	
	$dbh = connect();

    $sql = "INSERT INTO funcionario(nome,data,salario) VALUES ('$nome', '$data', '$sal')";

    $c = $dbh->query($sql);

    echo"<div class='alert alert-success' role='alert'>
	 1 Registro Inserido com Sucesso.
	</div>";

    echo" <a href=index.php class='btn btn-secondary'>Voltar</a>";

}


function excluir($id){
	$dbh = connect();
  $sql = "DELETE FROM funcionario WHERE id=$id";

  $dbh->query($sql);

  echo"<div class='alert alert-danger' role='alert'>
	 1 Registro deletado com Sucesso.
	</div>";
  echo" <a href=index.php class='btn btn-secondary'>Voltar</a>";

}

?>
