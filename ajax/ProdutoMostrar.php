<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Formas&Corpos</title>
  <link rel="icon" href="favicon.png">

  <!-- Bootstrap-->
  
   


</head>

<body >

 <?php

 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $dbname = "formas";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $exist = "select arquivo,nome,codigo,data,quantidade from produto";

 ?>
 <!-- Button trigger modal -->





<div style="overflow-y:auto;max-height: 74%;" id="tabela_Produto">
  <table  id="example" class="table table-bordered table-hover" >
    <thead>
      <tr>
        <th>Imagem</th>
        <th>Nome do Produto</th>
        <th>Quantidade</th>
        <th>Hora(ultima modificação)</th>
        <th>Operações</th>
      </tr>
    </thead>
    <tbody>
      <?php
     
      $valido = mysqli_query($conn,$exist);
      while($resultado =  $valido->fetch_array()){


        ?>
        <tr><td> <?php echo $resultado['arquivo'];?><img src="upload/<?php if($resultado['arquivo'] !=NULL){echo $resultado['arquivo']; }else{echo 'SemImagens.jpg';}?>" height="70" width="70"> </td>
          <td><?php echo  $resultado['nome']; ?>
            <td><?php echo  $resultado['quantidade']; ?>
              <td><?php echo $resultado['data']; ?></td>

              <td>
               <button class="btn btn-success edit_data" type="button" id="<?php echo $resultado["codigo"]; ?>"  name="codigo" data-toggle="modal" data-target="#alterarModal" >Alterar</button> 
               <button class="btn btn-danger delete_data" type="button" id="<?php echo $resultado["codigo"];  ?>" value= "<?php echo $resultado["codigo"];  ?>" name="codigo" data-toggle="modal" data-target="#apagarModal" >Deletar</button>  
                <!-- Modal Alterar -->
<div class="modal fade" id="alterarModal" tabindex="-1" role="dialog" aria-labelledby="alterarModallLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="alterarModallLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" id="formularioEdit" name="formularioEdit" >  
                          <label>Nome</label>  
                          <input type="text" name="nome" id="nome" class="form-control" />  
                          <br />
                          <label>Quantidade</label>  
                          <input type="number" name="quantidade" id="quantidade" class="form-control" /> 
                          <input type="hidden" name="codigo" id="codigo" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" id="return" data-dismiss="modal">Retornar</button>
                      

                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Deletar -->
<div class="modal fade" id="apagarModal" tabindex="-1" role="dialog" aria-labelledby="apagarModallLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="apagarModallLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Esta ação ira apagar todos os dados deste produto!
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" id="returns" data-dismiss="modal">Retornar</button>
                      <button type="submit" class="btn btn-secondary" id="deletaProduto" >Deletar</button>
                      <input type="submit" name="asd" id="asd" value="asd" class="btn btn-success" />
                      

                    </div>
                  </div>
                </div>
              </div>
          
        </td>
               
              


                      
                  <?php  } ?>

                </tr>




              </tbody>
            </table>
</div> 

               
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
         <script src="js/personal.js"></script>
        </body>

        </html>