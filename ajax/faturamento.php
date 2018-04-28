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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"> </script>
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    
    <!-- Bootstrap-->
    <link href="CapaMelhorado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Faturamento.css">
    
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

      <div id="container-faturamento" class="fadeIn">
        <div id="tabela-faturamento" >
          
          <center>
            <table id="faturamento-por-servico" class="compact stripe hover order-column">
              <thead>
                <tr>
                  <td> Serviço </td>
                  <td> Preço </td>
                  <td> Montante </td>
                </tr>
              </thead>

              <tbody>
                <tr id="serv-0">
                  <td id="serv-0-nome"> Maquiagem </td>
                  <td> R$ 25,00 </td>
                  <td id="serv-0-preco"> R$ 250,00 </td>
                </tr>

                <tr id="serv-1">
                  <td id="serv-1-nome"> Depilação </td>
                  <td> R$ 35,00 </td>
                  <td id="serv-1-preco"> R$ 700,00 </td>
                </tr>

                <tr id="serv-2">
                  <td id="serv-2-nome"> Cabelo </td>
                  <td> R$ 15,00 </td>
                  <td id="serv-2-preco"> R$ 300,00 </td>
                </tr>

                <tr id="serv-3">
                  <td id="serv-3-nome"> Podologia </td>
                  <td> R$ 85,00 </td>
                  <td id="serv-3-preco"> R$ 370,00 </td>
                </tr>

                <tr id="serv-4">
                  <td id="serv-4-nome"> Buzinaço </td>
                  <td> R$ 85,00 </td>
                  <td id="serv-4-preco"> R$ 170,00 </td>
                </tr>
                
              </tbody>
            </table>
          </center>
        </div>
        
        <div id="graficos-faturamento" >
          
          <center>
            <canvas id="grafico-donut" style="width:800px; height:400px; margin-top:10%;">
              Seu navegador não é compatível
            </canvas>
          </center>
        </div>
      </div> <!-- Container -->

    <footer>
      <?php 
      include('footer.php');
      ?>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/personal.js"></script>
    <script src="js/faturamento.js"></script>
  </body>
</html>