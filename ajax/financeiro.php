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
  <script src="jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"> 
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">

  <!-- Bootstrap-->
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
        <!-- Aba Consulta -->
        <div class="tab-pane active" role="tabpanel" id="consulta">
          <h3> Serviços: </h3>
          
          <div id="container-table-servicos">
            <table id="tabela-servicos" class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Tipo de Serviço</th>
                        <th>Cliente</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/01/2001</td>
                        <td>Maquiagem</td>
                        <td>Marco A Gomes</td>
                        <td>R$ 80,00</td>

                    </tr>
                    <tr>
                        <td>03/02/2001</td>
                        <td>Depilação</td>
                        <td>Buzininha Lopes</td>
                        <td>R$ 25,00</td>
                    </tr>
                </tbody>
            </table>
          </div>

          <div id="container-dash-servicos">
            <div id="grafico"></div>
            <div id="legenda-grafico">
              
            </div>
          </div>

        </div>

        <!-- Aba Comparar -->
        <div class="tab-pane" role="tabpanel" id="comparar">
          <h3> Escolha o tipo de comparação: </h3>
          
          <table id="tabela-comparar" class="table table-bordered" width="100%">
              <thead>
                  <tr>
                      <th>Column 1</th>
                      <th>Column 2</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Row 1 Data 1</td>
                      <td>Row 1 Data 2</td>
                  </tr>
                  <tr>
                      <td>Row 2 Data 1</td>
                      <td>Row 2 Data 2</td>
                  </tr>
              </tbody>
          </table>
        
        </div>

      </div>
      
    </div> <!-- Container -->

    <footer>
      <?php 
        include('footer.php');
      ?>
    </footer>


    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
         <script src="js/personal.js"></script>
         <script src="js/financeiro.js"></script>
  </body>
</html>