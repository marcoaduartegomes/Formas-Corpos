<?php

require_once __DIR__.'/connect.php';
 //fetch.php retorna do banco de dados todos os valores de um certo codigo.  
 if(isset($_POST["codigo"]))  
 {  
     echo $_POST["codigo"];
      $query = "SELECT * FROM cliente WHERE codigo = '".$_POST["codigo"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);
      print_r($row);
      echo json_encode($row); // retorna os dados para conferir o json
      
 }  
 ?>