<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Formas &#38; Corpos</title>

	<!-- bootstrap - link cdn -->
	<link rel="icon" href="imagens/favicon.png">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <style>
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .fadeIn{
            animation: fadeIn 0.15s ease-in-out;
        }
    </style>

</head>

<body>

	<!-- Static navbar -->
	<?php require_once __DIR__.'/header.php'; ?>
<!-- Corpo do sistema -->
        <div id="corpo-principal" class="fadeIn">
            <div id="corpo-index">
                <div id="menu-index">
                    <img src="img/icone-consulta.png" class="icone-index" id="consultas" onclick="window.location.href='Consultas.php'">
                    <img src="img/icone-servicos.png" class="icone-index" id="servicos" onclick="window.location.href='Servicos.php'">
                    <img src="img/icone-produtos.png" class="icone-index" id="produtos" onclick="window.location.href='Produtos.php'">
                    <br>
                    <img src="img/icone-clientes.png" class="icone-index" id="clientes" onclick="window.location.href='Clientes.php'">
                    <img src="img/icone-calendario.png" class="icone-index" id="calendario" onclick="window.location.href='fullcalendar.php'">
                    <img src="img/icone-financeiro.png" class="icone-index" id="financeiro" onclick="window.location.href='faturamento.php'">
                </div>

            </div>
        </div> 

</body>
</html>