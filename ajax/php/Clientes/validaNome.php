<?php

require_once __DIR__.'/connect.php';
 //fetch.php retorna do banco de dados todos os valores de um certo codigo.  
 if(isset($_POST["nome"]))  
 {  
      $query = "SELECT * FROM produto WHERE nome = '".$_POST["nome"]."'";  
      $result = mysqli_query($conn, $query);  
      while($resultado = mysqli_fetch_assoc($result)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }
       $vetor["data"] =  $vetor; // junta o vetor com o DATA para ser do tipo json
       
    echo json_encode($vetor);
      
 }  
 ?>
 