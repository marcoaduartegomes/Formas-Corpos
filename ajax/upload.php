<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "formas";
$mysqli = new mysqli($host, $username, $password, $dbname);
if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>

<?php

  $msg = false;
  if(isset($_FILES['arquivo'])){
    $extensao = strtolower($_FILES['arquivo']['name']); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    echo $extensao;
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
    $nome_real = $_POST["nome_real"];
    $quantidade = $_POST["quantidade"];
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$extensao); //efetua o upload
    $sql_code = "INSERT INTO produto (codigo,nome, arquivo, data,quantidade) VALUES(null,'$nome_real', '$extensao', NOW(),$quantidade)";
    if($mysqli->query($sql_code)){
      
      $msg = "Arquivo enviado com sucesso!";
    }else
      $msg = "Falha ao enviar arquivo.";
  }
?>
