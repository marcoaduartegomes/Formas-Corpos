<?php

require_once __DIR__.'/connect.php';
 //fetch.php   

      $query = "SELECT * FROM produto";  
      $result = mysqli_query($conn, $query);  
      while($resultado = mysqli_fetch_assoc($result)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }
       $vetor["data"] =  $vetor;

    echo json_encode($vetor);
 ?>