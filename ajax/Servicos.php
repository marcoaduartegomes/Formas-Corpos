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
 
    <link rel="stylesheet" type="text/css" href="css/Servicos.css"> 
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body >

 <?php
 require_once __DIR__.'/header.php';
 $exist = "select arquivo,nome,codigo,data,quantidade from produto";
 ?>

 <!-- Corpo do sistema -->
 <div id="corpo-principal" class="fadeIn" style="font-size: 13px;width:95%;margin-left:3%;">

   <div class="row">

    <div style="width: 70%;margin: auto;">
      <table  id="tabela-servico" class="table compact stripe hover" width="100%">

        <thead>
          <tr id="titulosTabela">
            <th>Nome</th>
            <th style="width:15%;">Preço</th>
            <th style="width:10%"></th>

          </tr>
          <tr id="pesquisar">
            <th>Nome</th>
            <th>Preço</th>
            <th border="none"></th>

          </tr>
        </thead>


        <tbody id="tabela-Servicos-Body">

        </tbody>
      </table>
    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
  <script src="js/servicos.js"></script>

</div>

<div class="modal fade" id="servicoModal" tabindex="-1" role="dialog" aria-labelledby="servicoModallLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="servicoModallLabel" style="color:white;"> Descrição do Serviço </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          <form method="post" id="formularioEdit" name="formularioEdit" >  
            <label> Nome do Serviço </label>
            <input type="text" name="nome" id="nome" class="form-control " />
            <br />

            <label> Preço do Serviço </label>  
            <input type="text" name="preco" id="preco" class="form-control" />
            <br />
            <input type="hidden" name="codigo" id="codigo" class="form-control" />

          </div>
          
          <div class="modal-footer">
            <input type="button" name="botaoModal" id="botaoModal" value="Insert" class="btn btn-success" />  
            <button type="button" class="btn btn-secondary" id="return" data-dismiss="modal">Retornar</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="servicoModalDeleta" tabindex="-1" role="dialog" aria-labelledby="servicoModalDeletalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="servicoModalDeletalLabel" style="color:white;">Deseja realmente excluir este serviço?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <!--  <div class="modal-body">
          <form method="post" id="formularioDeleta" name="formularioEdit" >




          </div> -->
          <div class="modal-footer">
            <input type="button" name="botaoModalDeleta" id="botaoModalDeleta" value="Deletar" class="btn btn-danger" />  
            <button type="button" class="btn btn-secondary" id="returnDeleta" data-dismiss="modal">Retornar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</body>

</html>