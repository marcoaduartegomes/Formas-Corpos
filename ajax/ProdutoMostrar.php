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
        <tr><td> <?php echo $resultado['arquivo'];?><img src="upload/<?php if($resultado['arquivo'] !=NULL){echo $resultado['arquivo']; }else{echo 'SemImagems.jpg';}?>" height="70" width="70"> </td>
          <td><?php echo  $resultado['nome']; ?>
            <td><?php echo  $resultado['quantidade']; ?>
              <td><?php echo $resultado['data']; ?></td>

              <td>
               <button class="btn btn-success edit_data" type="button" id="<?php echo $resultado["codigo"]; ?>"  name="codigo" data-toggle="modal" data-target="#apagarModal1" >Alterar</button> 
               <button class="btn btn-danger edit_data" type="button" id="<?php echo $resultado["codigo"]; ?>"  name="codigo" data-toggle="modal" data-target="#apagarModal1" >Deletar</button>  
                <!-- Modal Deletar -->
<div class="modal fade" id="apagarModal1" tabindex="-1" role="dialog" aria-labelledby="apagarModallLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="apagarModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" id="formularioEdit" name="formularioEdit" >  
                          <label>Enter Employee Name</label>  
                          <input type="text" name="nome" id="nome" class="form-control" />  
                          <br />
                          <label>Enter Employee Name</label>  
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
          </div> </td>
               
              


                      
                  <?php  } ?>

                </tr>




              </tbody>
            </table>


               


         
        </body>

        </html>