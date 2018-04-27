<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formas &#38; Corpos</title>

    <link rel="icon" href="imagens/favicon.png">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">    
    <link href="CapaMelhorado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Help.css">
    <script type="text/javascript" src="js/help.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Static navbar -->
    <?php require_once __DIR__.'/header.php'; ?>

    <div class="container">

        <div id="opcoes-ajuda">
            <div class="topicos-ajuda" id="consultas" onClick="fazerRequisicao('help_Consultas.php','tela-ajuda')">
                <img src="teste.jpg">
                <h4> Consultas </h4>
            </div>

            <div class="topicos-ajuda" id="clientes" onClick="fazerRequisicao('help_Clientes.php','tela-ajuda')">
                <img src="teste.jpg">
                <h4> Clientes </h4>
            </div>

            <div class="topicos-ajuda" id="faturamentos" onClick="fazerRequisicao('help_Faturamentos.php','tela-ajuda')">
                <img src="teste.jpg">
                <h4> Faturamentos </h4>
            </div>

            <div class="topicos-ajuda" id="produtos" onClick="fazerRequisicao('help_Produtos.php','tela-ajuda')">
                <img src="teste.jpg">
                <h4> Produtos </h4>
            </div>

            <div class="topicos-ajuda" id="modificacoes" onClick="fazerRequisicao('help_Modificacoes.php','tela-ajuda')">
                <img src="teste.jpg">
                <h4> Modificações </h4>
            </div>

        </div>

        <div id="tela-ajuda">
            
        

        </div>

    </div> <!-- Container -->

  <?php require_once __DIR__.'/footer.php'; ?>

  </body>
</html>