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
  
  <link rel="stylesheet" type="text/css" href="css/Clientes.css"> 
  <!-- Bootstrap-->
  



</head>

<body >

 <?php
 require_once __DIR__.'/header.php';
 $exist = "select arquivo,nome,codigo,data,quantidade from produto";
 ?>
 <!-- Button trigger modal -->
 <!-- Corpo do sistema -->
 <div id="corpo-principal" class="fadeIn" style="font-size: 13px;width:95%;margin-left:3%;">

   <div class="row">

    <div style="width: 70%;margin: auto;">
      <table  id="tabela-Cliente" class="table" width="100%">

        <thead>
          <tr id="titulosTabela">
            <th>Nome</th>
            <th>CPF</th>

            <th>E-Mail</th>
            <th width="20%" border="none"></th>

          </tr>
          <tr id="pesquisar">
            <th>Nome</th>
            <th>CPF</th>

            <th>E-Mail</th>
            <th width="10%"  border="none"></th>

          </tr>
        </thead>


        <tbody id="tabela-Cliente-Body">

        </tbody>
      </table>
    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
  <script src="js/personal.js"></script>
  <script src="js/clientes.js"></script>
</div>

<div class="modal fade" id="fichaClienteModal" tabindex="-1" role="dialog" aria-labelledby="clienteModallLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" style="color:white;"> Ficha do Cliente </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <label class="labelFicha">Nomes</label>  
          <input type="text" name="nome" id="Fichanome" class="form-control form-control-sm" Readonly/>

          <label class="labelFicha">CPF</label>  

          <input type="text" name="cpf" id="Fichacpf" class="form-control form-control-sm" Readonly/>      
          <label class="labelFicha">Email</label>  
          <input type="email" name="email" id="Fichaemail" class="form-control form-control-sm" Readonly/>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="labelFicha">Telefone</label>
              <input type="text" name="telefone" id="Fichatelefone" class="form-control form-control-sm" Readonly/>
            </div>
            <div class="form-group col-md-6">
              <label class="labelFicha">Celular</label> 
              <input type="text" name="celular" id="Fichacelular" class="form-control form-control-sm" Readonly/>
            </div>
          </div> 
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="labelFicha">Ultima Consulta</label>
              <input type="date" name="telefone" id="FichaUltimaConsulta" class="form-control form-control-sm" Readonly/>
            </div>
            <div class="form-group col-md-6">
              <label class="labelFicha">Proxima Consulta</label> 
              <input type="datetime" name="celular" id="FichaProximaConsulta" class="form-control form-control-sm" Readonly/>
            </div>
          </div> 
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="labelFicha">Consultas</label>


            </div>
          </div> 
          <input type="hidden" name="codigo" id="Fichacodigo" class="form-control form-control-sm" Readonly/>
        </div>
        
      </div>
    </div>
  </div>

<div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="clienteModallLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="clienteModallLabel" style="color:white;"> Dados do Cliente </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="formularioEdit" name="formularioEdit" >  
            <label>Nome</label>  
            <input type="text" name="nome" id="nome" class="form-control " />
            <br />
            <label>CPF</label>  

            <input type="text" name="cpf" id="cpf" class="form-control is-valid" />
            <div class="invalid-feedback">
              CPF INVALIDO. Insira novamente ou confira os dados.
            </div>
            <br />
            <label>Email</label>  
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

  <div class="modal fade" id="clienteModalDeleta" tabindex="-1" role="dialog" aria-labelledby="clienteModalDeletalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="clienteModalDeletalLabel" style="color:white;">Deseja realmente excluir este cliente?</h5>
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

  <div class="modal fade" id="aniversarioModal" tabindex="-1" role="dialog" aria-labelledby="clienteModalaniversarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="clienteModalaniversariolLabel" style="color:white;">Estes clientes fazem Aniversário hoje!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="formularioAniversario" name="formularioAniversario" action="php/Clientes/enviarAniversariantes.php">
            <label style="font-weight:800;"> Clientes: </label> <br>
            
            <?php
              include 'php/Clientes/aniversariantes.php';
            ?>
            
            <br>
            <label style="font-weight:800;"> Escreva uma mensagem para eles: </label> <br>
            <textarea class="pesquisar-tabela" rows="5" name='msganiversario' id="MsgAniversario" autofocus></textarea>

          </div>
          <div class="modal-footer">
            <button type="submit" name="botaoEnviaAniversario" id="botaoEnviaAniversario" value="Enviar Mensagens" class="btn btn-success"> Enviar Mensagens </button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="clienteModalMsg" tabindex="-1" role="dialog" aria-labelledby="clienteModalMsgLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="clienteModalMsglLabel" style="color:white;"> Enviar mensagem ao cliente </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="formularioMsg" name="formularioEmail" action="php/Clientes/msgCliente.php">
            <label class="labelFicha"> Email </label>  
            <input type="email" name="email" id="Fichaemail2" class="form-control form-control-sm" Readonly/>

            <label class="labelFicha"> Assunto </label>
            <input type="text" name="assunto" id="AssuntoEmail" class="form-control form-control-sm"/>

            <label class="labelFicha"> Enviar Mensagem </label>
            <textarea class="form-control" rows="5" id="mensagem" name="mensagem"></textarea>


          
        </div>
        <div class="modal-footer">
          <button type="submit" name="botaoModalMsgEnvia" id="botaoModalMsgEnvia" value="Enviar" class="btn btn-success"> Enviar </button>
          </form>
          <button type="button" class="btn btn-secondary" id="returnDeleta" data-dismiss="modal">Retornar</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>