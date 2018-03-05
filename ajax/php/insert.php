<?php

require_once __DIR__.'/connect.php';
 //insert.php tem duas variações, uma de criar um produto novo e uma de alterar um produto existente.
$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"]; 
$codigo = $_POST["codigo"];
if($_POST["nome"] != '')  
{  

  if($codigo>0){ // se o produto ja existir, sera executado uma query de alterar o produto
   $query = "  
   UPDATE produto  
   SET nome='$nome',   
   quantidade='$quantidade',
   data = now()  

   WHERE codigo='".$_POST["codigo"]."'";  
   $message = 'Data Updated'; }else{ // caso ele n exista, sera executado uma query para criar um novo produto

    $query = "  
    INSERT INTO produto(nome,quantidade,data) 
    VALUES ('$nome','$quantidade', now())";


  } 
}  


$result = mysqli_query($conn, $query);  
echo $query;



?>