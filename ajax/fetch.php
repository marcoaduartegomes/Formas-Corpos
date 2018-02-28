<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "formas";
$conn = new mysqli($host, $username, $password, $dbname);
 //fetch.php   
 if(isset($_POST["codigo"]))  
 {  
      $query = "SELECT * FROM produto WHERE codigo = '".$_POST["codigo"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);
      
 }  
 ?>