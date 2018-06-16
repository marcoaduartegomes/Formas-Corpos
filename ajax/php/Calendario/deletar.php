<?php

require_once __DIR__.'/connect.php';
 //insert.php tem duas variações, uma de criar um produto novo e uma de alterar um produto existente.
$codConsulta = $_POST["codConsulta"];
 // caso ele n exista, sera executado uma query para criar um novo produto

$query = "delete from consulta where codigo = '$codConsulta' ";


$result = mysqli_query($conn, $query);    
  echo $query; // retorna os dados para conferir o json




  ?>