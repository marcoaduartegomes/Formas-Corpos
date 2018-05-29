<?php

require_once __DIR__.'/connect.php';
 //getDadoTabela.php retorna do banco de dados todos os valores de um certo codigo para preencher a tabela via ajax 
      $data = "allDay:false";
      $query = "select cliente.nome as title, start,end,allDay,className from consulta inner JOIN cliente on codCliente = cliente.codigo";  
      $result = mysqli_query($conn, $query);
      $rowcount=mysqli_num_rows($result);
      
      while($resultado = mysqli_fetch_assoc($result)){
        $vetor[] = array_map('utf8_encode', $resultado);
       
        
    }
    
    if($rowcount==0) { $vetor[] = "{codigo: '', Nome: '', CPF: '', Telefone: '', Celular : '', email: ''}";
    	
    }else{
       // junta o vetor com o DATA para ser do tipo json 

      
    
  }

  $novo =json_encode($vetor);
  $transform = array(
    0=> false,

  );
$vetor=json_decode($novo);
foreach($vetor as $key) $key->allDay=$transform[$key->allDay];

echo json_encode($vetor);

 ?>