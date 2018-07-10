<?php
require_once __DIR__.'/connect.php';
 //fetch.php retorna do banco de dados todos os valores de um certo codigo.  
 if(isset($_POST["codigo"]))  
 {  
 	$codigo = $_POST["codigo"];
 	  $verificaConsulta = "SELECT start from consulta where codCliente='".$_POST["codigo"]."'";
 	  $resultVerifica = mysqli_query($conn, $verificaConsulta);
 	  $rowcount = mysqli_num_rows($resultVerifica);
 	  if($rowcount>0){  
      $query = "select start as proximaConsulta from consulta inner join cliente on cliente.codigo = consulta.codCliente where start > now() and cliente.codigo = '$codigo' order by start asc"; 
      }else{
		$query = "SELECT Celular,cliente.codigo,cpf,email,Nome,Telefone from cliente WHERE codigo = '".$_POST["codigo"]."'"; 
      } 
      $result = mysqli_query($conn, $query);  
      while($resultado = mysqli_fetch_assoc($result)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    } 
      echo json_encode($vetor); // retorna os dados para conferir o json
      
 }  
 ?>
