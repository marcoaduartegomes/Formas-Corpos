<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Formas&Corpos</title>

	<!-- bootstrap - link cdn -->
	<link rel="icon" href="imagens/favicon.png">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	


</head>

<body>

	<!-- Static navbar -->
	<?php require_once __DIR__.'/header.php'; ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="botoes">
						<a  href="consultas.php" class="btn btn-default AlinhamentoBtn">Consultas</a>
						<a href="CLientes.php" class="btn btn-default">Clientes</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="botoes">
						<a  href="#" class="btn btn-default AlinhamentoBtn ">Faturamento</a>
						<a href="Produtos.php" class="btn btn-default ">Produtos</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="botoes">
						<a href="#" class="btn btn-default AlinhamentoBtn ">Modificações</a>
						<a href="#" class="btn btn-defaultS">Modificações</a>
					</div>
				</div>
			</div>
		</div>
	</section>



	




	<?php require_once __DIR__.'/footer.php'; ?>

</body>
</html>