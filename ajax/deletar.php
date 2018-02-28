
<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "formas";
$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_errno)
  echo "Falha na conexão: (".$conn->connect_errno.") ".$conn->connect_error;



if(isset($_POST['mudando'])){
   echo $_POST['codigo'];

   if($_POST['arquivo']){
      $sql_code = "update produto set arquivo ='".$_POST['arquivo']."',  nome='".$_POST['nome_real']."', data=NOW(),quantidade=".$_POST['quantidade']." where codigo = '".$_POST['codigo']."'";
unlink("upload/".$_GET['arquivoantigo']);





   }else{
    $sql_code = "update produto set nome='".$_POST['nome_real']."', data=NOW(),quantidade=".$_POST['quantidade']." where codigo = '".$_POST['codigo']."'";
unlink("upload/".$_GET['arquivoantigo']);
  }
    
    if($conn->query($sql_code)){
      echo  "Arquivo enviado com sucesso!";
     echo "<script>
    window.location.href ='ProdutoMostrar.php';
     </script>";
    }else
      echo "Falha ao enviar arquivo.";
  }
?>