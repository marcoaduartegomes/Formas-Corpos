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

    <header>
      <?php
      include 'header.php';
      ?>
    </header>

    <div class="container">

        <div id="opcoes-ajuda">
            <div class="topicos-ajuda" id="consultas" onClick="telaAjuda()">
                <img src="teste.jpg">
                <h4> Consultas </h4>
            </div>

            <div class="topicos-ajuda" id="clientes" onClick="telaAjuda(clientes)">
                <img src="teste.jpg">
                <h4> Clientes </h4>
            </div>

            <div class="topicos-ajuda" id="faturamentos" onClick="telaAjuda(faturamentos)">
                <img src="teste.jpg">
                <h4> Faturamentos </h4>
            </div>

            <div class="topicos-ajuda" id="produtos" onClick="telaAjuda(produtos)">
                <img src="teste.jpg">
                <h4> Produtos </h4>
            </div>

            <div class="topicos-ajuda" id="modificacoes" onClick="telaAjuda(modificacoes)">
                <img src="teste.jpg">
                <h4> Modificações </h4>
            </div>

        </div>

        <div id="tela-ajuda">
            <div>
                <img src="favicon.png'" class="img-ajuda">
                <h2> Titulo </h2>
                <p>
                    • Lorem ipsidum ajkmsjsmka lakasmxom lksammkxmlkxalm;
                    • Lorem xaneda jsdnjkxmio jsahdjjakdnnzmdiijioejkdzl 
                </p>
            </div>
            <div>
                <p>
                    • Lorem ipsidum ajkmsjsmka lakasmxom lksammkxmlkxalm;
                    • Lorem xaneda jsdnjkxmio jsahdjjakdnnzmdiijioejkdzl
                    • Lorem ipsidum ajkmsjsmka lakasmxom lksammkxmlkxalm;
                    • Lorem ipsidum ajkmsjsmka lakasmxom lksammkxmlkxalm;
                    • Lorem ipsidum ajkmsjsmka lakasmxom lksammkxmlkxalm;
                    • Lorem ipsidum ajkmsjsmka lakasmxom lksammkxmlkxalm;
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