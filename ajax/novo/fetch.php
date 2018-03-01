<?php

require_once __DIR__.'/connect.php';
 //fetch.php   
 if(isset($_POST["codigo"]))  
 {  
      $query = "SELECT * FROM produto WHERE codigo = '".$_POST["codigo"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);
      
 }  
 ?>