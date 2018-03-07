<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Formas&Corpos</title>
 <link rel="icon" href="imagens/favicon.png">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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



<div style="width: 70%;">


  <table  id="tabela-Cliente" class="table table-bordered table-hover" >
    
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>E-Mail</th>
        <th>Operações</th>
   
      </tr>
      <tr id="pesquisar">
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>E-Mail</th>
        <th>Operações</th>
     
      </tr>
    </thead>
    

   <tbody id="tabela-Cliente-Body">
     
   </tbody>
            </table>
</div>
 <div class="modal fade" data-backdrop="static" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="clienteModallLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="clienteModallLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" id="formularioEdit" name="formularioEdit" >  
                          <label>Nome</label>  
                          <input type="text" name="nome" id="nome" class="form-control " />
                          <br />
                          <label for="nome">CPF</label>  

                          <input type="number" name="cpf" id="cpf" class="form-control is-valid" />
                          <div class="invalid-feedback">
                            CPF INVALIDO. Insira novamente ou confira os dados.
                          </div>
                          <br />
                          <label ">Email</label>  
                          <input type="email" name="email" id="email" class="form-control " />
                          <br />
                          <label>Telefone</label>  
                          <input type="text" name="telefone" id="telefone" class="form-control " />
                          <br />
                          <label>Celular</label>  
                          <input type="text" name="celular" id="celular" class="form-control " />
                           
                          <input type="hidden" name="codigo" id="codigo" class="form-control" /> 
                          
                        
                    </div>
                    <div class="modal-footer">
                      <input type="submit" name="botaoModal" id="botaoModal" value="Insert" class="btn btn-success" />  
                      <button type="button" class="btn btn-secondary" id="return" data-dismiss="modal">Retornar</button>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
               
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
         <script src="js/personal.js"></script>
         <script src="js/clientes.js"></script>
      
        </body>

        </html>