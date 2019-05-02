<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
		
		
		var obj;
		
		function click(){
			obj.value="R$ ";
		}
		
		function init(){
			obj = document.getElementById("salario");
			obj.addEventListener("click",click);
		}
		
		window.addEventListener("load",init);
	</script>
	<style>
		h1,p,label{
			font-family: 'Oswald', sans-serif;
		};
	</style>
	
	<title>Novo Registro</title>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Inserção</h1>
			<p class="lead">Inserção de Dados.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="offset-3 col-6">
				<form action="salvar.php" method="GET">
					<div class="form-group">
						<strong><em><label for="nome">Nome</label></em></strong>
						<input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="Insira seu nome">
					</div>
				  
					<div class="form-group">
						<strong><em><label for="exampleInputPassword1">Data de Nascimento</label></em></strong>
						<input type="date" class="form-control" id="data" name="data" placeholder="Insira sua data de nascimento">
					</div>
					
					<div class="form-group">
						<strong><em><label for="exampleInputPassword1">Salario</label></em></strong>
						<input type="text" class="form-control" id="salario" name="salario" placeholder="Insira seu salario aqui">
					</div>
					
					<input type="submit" class="btn btn-primary" value="Enviar">
				</form>
			</div>
		</div>
	</div>
</body>
</html>