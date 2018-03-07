<?php

require_once __DIR__.'/connect.php';
 //insert.php tem duas variações, uma de criar um produto novo e uma de alterar um produto existente.
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$codigo = $_POST["codigo"];
$vetor = NULL;
 

  if($codigo>0){ // se o produto ja existir, sera executado uma query de alterar o produto
   $query = "  
   UPDATE cliente  
   SET Nome='$nome',   
   CPF='$cpf',
   Telefone='$telefone',
   Celular='$celular',
   email='$email' 

   WHERE codigo='".$_POST["codigo"]."'";  
   $message = 'Data Updated'; }else{ // caso ele n exista, sera executado uma query para criar um novo produto

    $query = "  
    INSERT INTO cliente(Nome,CPF,Telefone,Celular,email) 
    VALUES ('$nome','$cpf','$telefone','$celular','$email')";


  } $result = mysqli_query($conn, $query);   
       $query = "SELECT * FROM cliente WHERE codigo = '".$_POST["codigo"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row); // retorna os dados para conferir o json




?>