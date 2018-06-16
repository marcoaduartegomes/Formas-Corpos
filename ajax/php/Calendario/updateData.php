<?php

require_once __DIR__.'/connect.php';
 //insert.php tem duas variações, uma de criar um produto novo e uma de alterar um produto existente.
$inicio = $_POST["start"];
$final = $_POST["end"];
$codConsulta = $_POST["codConsulta"];
 // caso ele n exista, sera executado uma query para criar um novo produto

$query = "  
update consulta
set start ='$inicio' ,end = '$final'
where codigo = '$codConsulta' ";


$result = mysqli_query($conn, $query);    
  echo $query; // retorna os dados para conferir o json




  ?>