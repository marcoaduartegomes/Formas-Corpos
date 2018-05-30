<?php

require_once __DIR__.'/connect.php';
 //insert.php tem duas variações, uma de criar um produto novo e uma de alterar um produto existente.
$nome = $_POST["nome"];
$preco = $_POST["preco"]; 
$codigo = $_POST["codigo"];
if($_POST["nome"] != '')  
{  

  if($codigo>0){ // se o produto ja existir, sera executado uma query de alterar o produto
   $query = "  
   UPDATE servico  
   SET nome='$nome',   
   preco='$preco' 

   WHERE codigo='".$_POST["codigo"]."'";  
   $message = 'Data Updated'; }else{ // caso ele n exista, sera executado uma query para criar um novo produto

    $query = "  
    INSERT INTO servico(nome,preco) 
    VALUES ('$nome','$preco')";


  } 
}  


$result = mysqli_query($conn, $query);  
echo $query;



?>