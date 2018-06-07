<?php

require_once __DIR__.'/connect.php';
 //insert.php tem duas variações, uma de criar um produto novo e uma de alterar um produto existente.
$nome = $_POST["nome"];
$inicio = $_POST["inicio"];
$final = $_POST["final"];
$servico = $_POST["servico"];

 // caso ele n exista, sera executado uma query para criar um novo produto

    $query = "  
    insert into consulta(start,end,codServico,codCliente,allDay,className)
values ('$inicio','$final','$servico','$nome',false,'important')";


  $result = mysqli_query($conn, $query);    
  echo $query; // retorna os dados para conferir o json




      ?>