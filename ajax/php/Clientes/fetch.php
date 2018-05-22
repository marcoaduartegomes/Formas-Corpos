<?php
require_once __DIR__.'/connect.php';
 //fetch.php retorna do banco de dados todos os valores de um certo codigo.  
 if(isset($_POST["codigo"]))  
 {  
 	  $verificaConsulta = "SELECT dataFim from consulta where codCliente='".$_POST["codigo"]."'";
 	  $resultVerifica = mysqli_query($conn, $verificaConsulta);
 	  $rowcount = mysqli_num_rows($resultVerifica);
 	  if($rowcount>0){  
      $query = "SELECT Celular,cliente.codigo,cpf,email,Nome,Telefone,dataFim from cliente inner join consulta on cliente.codigo = consulta.codCliente WHERE cliente.codigo = '".$_POST["codigo"]."' and dataFim = (Select max(dataFim) from consulta where cliente.codigo='".$_POST["codigo"]."')"; 
      }else{
		$query = "SELECT Celular,cliente.codigo,cpf,email,Nome,Telefone from cliente WHERE codigo = '".$_POST["codigo"]."'"; 
      } 
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row); // retorna os dados para conferir o json
      
 }  
 ?>