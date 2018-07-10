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
          <label id="periodoInicio" for="dataInicio"> De&nbsp; </label> 
          <input type ="text" id="dataInicio" name="dataInicio" class="pesquisar-tabela" placeholder="Ex.: 2018/05/11">
          <br>
          <label id="periodoFim" for="dataFim"> Ate </label>           
          <input type ="text" id="dataFim" name="dataFim" class="pesquisar-tabela" placeholder="Ex.: 2018/05/11">
          <br>
        </center>
          <input style="margin-left:25%; margin-top:7px;" type="radio" name="pago" id="pago" value="pago"> Pagamentos Efetuados<br>
          <input style="margin-left:25%; margin-top:7px;" type="radio" name="pago" id="pago" value="naoPago"> Pagamentos Não Efetuados<br>
          <input style="margin-left:25%; margin-top:10px;" type="radio" name="pago" id="pago" value="todos"> Todos<br>
        <center>
          <button class="botao-faturamento" id="muda" value=grafico onclick="reloadTable();setTimeout(draw, 200)">Atualizar</button>
          <button class="botao-faturamento" id="dataHoje" onclick="dataAtual()">Hoje</button>
          <table  id="tabela-Cliente" class="table" width="100%">

            <thead>
              <tr>
                <th style="width:50%;">Nome</th>
                <th style="width:25%;">Quantidade</th>
                <th style="width:25%;">Total</th>
              </tr>
            </thead>


            <tbody id="tabela-Cliente-Body">


            </tbody>
          </table>
        </center>
        </div>
        
        <div id="graficos-faturamento" >
          
          <center id="tagCenterChart">
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