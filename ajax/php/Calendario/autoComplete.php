<?php

require_once __DIR__.'/connect.php';
 //getDadoTabela.php retorna do banco de dados todos os valores de um certo codigo para preencher a tabela via ajax 
      $nome = $_POST["nome"];
      $query = "SELECT nome as label FROM cliente where nome like '%$nome%'";  
      $result = mysqli_query($conn, $query);
      $rowcount=mysqli_num_rows($result);
      
      while($resultado = mysqli_fetch_assoc($result)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }
    
    if($rowcount==0) { $vetor[] = "{codigo: '', Nome: '', CPF: '', Telefone: '', Celular : '', email: ''}";
    	
    }else{
       $vetor["data"] =  $vetor; // junta o vetor com o DATA para ser do tipo json 
    
       
    
  }echo json_encode($vetor);
 ?>