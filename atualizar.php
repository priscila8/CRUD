<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col">

			<?php
			include('methods.php');
			$dbh = connect();

			$nome=$_GET['nome'];
			$data=$_GET['data'];
			$sal = $_GET['salario'];
			$id = $_GET['id'];
			$sql = "update funcionario 
			set nome='$nome', 
			  data='$data',
			  salario='$sal'
			  where id=$id";
			  
			$count = $dbh->exec($sql);

			echo "<div class='alert alert-primary' role='alert'>
			  $count Registro(s) foi atualizado(s)!
			</div>";
			echo "<a href=index.php class='btn btn-secondary'>Voltar</a></p>";
			?>
		</div>
	</div>
</div>
</body>
</html>
