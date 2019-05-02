<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Atualizar Registro</title>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Atualizar</h1>
			<p class="lead">Atualizar Registros</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="offset-3 col-6">
				<form action="atualizar.php" method="GET">					
					<?php
						include('methods.php');
						$dbh = connect();
						$id = $_GET['id'];
						$sql = "SELECT * FROM funcionario where id='$id'";
						foreach ($dbh->query($sql) as $row) {
						echo"

						<div class='form-group'>
						<label for='nome'>Nome</label>
						<input type='text' class='form-control' id='nome' name='nome' aria-describedby='nome' placeholder='Insira seu nome' value=".$row['nome'].">
					</div>
				  
					<div class='form-group'>
						<label for='data'>Data de Nascimento</label>
						<input type='text' class='form-control' id='data' name='data' placeholder='Insira sua data de nascimento' value=".$row['data'].">
					</div>
					
					<div class='form-group'>
						<label for='salario'>Salario</label>
						<input type='text' class='form-control' id='salario' name='salario' placeholder='Insira seu salario aqui' value=".$row['salario'].">
					</div>
					
					<input type='text' name='id' style='visibility:hidden' value=".$row['id'].">
					";
					}
					
					?>
					<input type="submit" class="btn btn-secondary" value="Atualizar">
				</form>
			</div>
		</div>
	</div>
</body>
</html>