<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    
	<title>Página de consulta</title>
	<link rel=stylesheet href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>
 
	<script>
		$(document).ready(function() {
		$('#example').DataTable();
		} );
	</script>
	
	<?php include('methods.php'); ?>
	
	</head>
	<body>
		<div class="jumbotron jumbotron-fluid p-4">
			<div class="container">
				<h1 class="display-4">CDDF</h1>
				<p class="lead">Consulta de Dados de Funcionários.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">		
					<table id="example" class="display" style="width:100%">        
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Data</th>
								<th>Salario</th>
								<th></th>
								<th></th>
							</tr>
					</thead>
					<tbody>
						<?php
							listar();
						?>
					</tbody>
				</table>		
				<h3><a href=novo.php>Novo Registro</a></h3>
			</div>
		</div>
	</div>
</body>
</html>