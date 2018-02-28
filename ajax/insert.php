<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "formas";
$conn = new mysqli($host, $username, $password, $dbname);
 //fetch.php   
$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"]; 
if($_POST["nome"] != '')  
      {  
           $query = "  
           UPDATE produto  
           SET nome='$nome',   
           quantidade='$quantidade'  
           
           WHERE codigo='".$_POST["codigo"]."'";  
           $message = 'Data Updated';  
      }  

 
	$result = mysqli_query($conn, $query);  
       echo $query;
       
      
   
 ?>