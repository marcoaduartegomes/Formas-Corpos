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
 <link rel="stylesheet" type="text/css" href="css/produtos.css">
 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"> 
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">

  <!-- Bootstrap-->
  
   


</head>

<body >

 <?php


require_once __DIR__.'/header.php';

 $exist = "select arquivo,nome,codigo,data,quantidade from produto";

 ?>
 <!-- Button trigger modal -->

<div id="corpo-principal" class="fadeIn">

<div style="width: 70%;margin: auto;">


  <table  id="tabela-Produto" class="table compact stripe hover" >
    
    <thead>
      <tr id="titulosTabela">
        <th>Nome do Produto</th>
        <th style="width:19%;">Quantidade</th>
        <th style="width:27%;">Última Modificação</th>
        <th style="width:15%;"></th>
      </tr>
      <tr id="pesquisar">
        <th>Nome do Produto</th>
        <th>Quantidade</th>
        <th>Hora(ultima modificação)</th>
        <th border="none">Operações</th>
      </tr>
    </thead>
    

   <tbody id="tabela-Produto-Body">
     
   </tbody>
            </table>
</div>
</div>

 <div class="modal fade" id="produtoModal" tabindex="-1" role="dialog" aria-labelledby="produtoModallLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="produtoModallLabel" style="color:white;"> Dados do Produto </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" id="formularioEdit" name="formularioEdit" >  
                          <label for="nome">Nome</label>  
                          <input type="text" name="nome" id="nome" class="form-control is-valid" required/>
                          <div class="invalid-feedback">
                            Este Nome ja existe. Por favor escolha outro.
                          </div>  
                          <br />
                          <label>Quantidade</label>  
                          <input type="number" name="quantidade" id="quantidade" class="form-control " required />
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


              <div class="modal fade" id="produtoModalDeleta" tabindex="-1" role="dialog" aria-labelledby="produtoModalDeletalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="produtoModalDeletalLabel" style="color:white;">Deseja realmente excluir este produto?</h5>
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

               
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
         <script src="js/personal.js"></script>
         <script src="js/produtos.js"></script>
      
        </body>

        </html>