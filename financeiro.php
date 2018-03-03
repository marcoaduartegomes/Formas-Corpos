<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formas e Corpos</title>

    <link rel="icon" href="imagens/favicon.png">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">    
    <link href="CapaMelhorado.css" rel="stylesheet">
     <link rel="stylesheet" href="css/Financeiro.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
      <?php
      include 'header.php';
      ?>
    </header>

    <div class="container" id="container-financeiro">

      <!-- Criação das Abas -->
      <ul class="nav nav-tabs">
        <li class="nav-item"> <a class="nav-link active" href="#consulta" role="tab" data-toggle="tab"> Consulta </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#comparar" role="tab" data-toggle="tab"> Comparar </a> </li>
      </ul>

      <!-- Conteúdo das Abas -->
      <div class="tab-content">
        <!-- Aba Informações -->
        <div class="tab-pane active" role="tabpanel" id="consulta">
          <h3> Serviços: </h3>
          <p>
            
          </p>
        </div>

        <!-- Aba Avaliações -->
        <div class="tab-pane" role="tabpanel" id="comparar">
          <h3> Escolha o tipo de comparação: </h3>
          <p>
            
          </p>
        </div>

      </div>
      
    </div> <!-- Container -->

    <footer>
      <?php 
        include('footer.php');
      ?>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>