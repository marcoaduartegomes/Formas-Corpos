<?php

  require_once __DIR__.'/connect.php';
 //getDadoTabela.php retorna do banco de dados todos os valores de um certo codigo para preencher a tabela via ajax 

  //$query = "SELECT * FROM consulta WHERE start = '2018-05-11 06:00:00'";
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d');

  $query = "SELECT codigo, codCliente, codServico, start  FROM consulta  WHERE LOCATE('".$date."',start)";
  $result = mysqli_query($conn, $query);
  $rowcount=mysqli_num_rows($result);
  
  if($rowcount != 0){
    $resultado = mysqli_fetch_assoc($result);
    $vetor[] = $resultado;
    //print_r($resultado);
    
    
    while($resultado = mysqli_fetch_assoc($result)){
      $vetor[] = $resultado; 
    }

    $json_dados = json_encode($vetor);
    $json_dados = json_decode($json_dados);

    foreach( $json_dados as $cons){
      $horario = str_replace($date,"",$cons->start);
      $codServ = $cons->codServico;
      $sql = "SELECT nome  FROM servico  WHERE codigo = ".$codServ;
      $result = mysqli_query($conn, $sql);
      $resultado = mysqli_fetch_assoc($result);
      $resultado = json_encode($resultado);
      $resultado = json_decode($resultado);
      $servico = $resultado->nome;

      $codClien = $cons->codCliente;
      $sql = "SELECT Nome  FROM cliente  WHERE codigo = ".$codClien;
      $result = mysqli_query($conn, $sql);
      $resultado = mysqli_fetch_assoc($result);
      $resultado = json_encode($resultado);
      $resultado = json_decode($resultado);
      $cliente = $resultado->Nome;
  
      echo ("<li class ='linhasNotificacao' data-horario='$horario' data-servico='$servico' data-cliente='$cliente'> $servico marcado para às $horario </li>");
    }
  } else {
    echo ("<h5 style='cursor:default;'> Não há consultas marcadas para hoje </h5>");
  }
?>