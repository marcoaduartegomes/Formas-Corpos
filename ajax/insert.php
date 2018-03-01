<?php

require_once __DIR__.'/connect.php';
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