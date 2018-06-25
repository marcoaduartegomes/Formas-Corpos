<?php

  require_once __DIR__.'/connect.php';
  //getDadoTabela.php retorna do banco de dados todos os valores de um certo codigo para preencher a tabela via ajax 

  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d');

  $query = "SELECT Nome, email  FROM cliente  WHERE LOCATE('".$date."',nascimento)";
  $result = mysqli_query($conn, $query);
  $rowcount=mysqli_num_rows($result);
  
  if($rowcount != 0){
    $resultado = mysqli_fetch_assoc($result);
    $vetor[] = $resultado;

    while($resultado = mysqli_fetch_assoc($result)){
      $vetor[] = $resultado; 
    }

    $json_dados = json_encode($vetor);
    $json_dados = json_decode($json_dados);

    $listaEmail="";

    foreach( $json_dados as $cons){
      echo ("<label class='listaEmail'> $cons->Nome </label> <br>"); 
      if($listaEmail==""){
        $listaEmail = $cons->email;
      }
      else{
        $listaEmail = $listaEmail.",".$cons->email;
      }
    }
  
    echo("<input type='hidden' name='email' id='listaEmail' value='$listaEmail' class='form-control'/>");
  } else {
    echo ("<h3 style='cursor:default;'> Nenhum cliente cadastrado faz aniversário hoje </h3>");
  }
?>