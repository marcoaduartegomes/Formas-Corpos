<?php

require_once __DIR__.'/connect.php';
 //getDadoTabela.php retorna do banco de dados todos os valores de um certo codigo para preencher a tabela via ajax 
      $query = "SELECT servico.nome, preco, sum(preco) as montante from consulta inner join servico on codServico = servico.codigo where datafim ='2018-05-31 00:00:00' group by servico.nome";  
      $result = mysqli_query($conn, $query);
      $rowcount=mysqli_num_rows($result);
      
      while($resultado = mysqli_fetch_assoc($result)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }
    
    if($rowcount==0) { $vetor[] = "{nome: '', preco: '', montante: ''}";
    	
    }else{
       $vetor["data"] =  $vetor; // junta o vetor com o DATA para ser do tipo json 
    
       
    
  }echo json_encode($vetor);
 ?>