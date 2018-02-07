<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <script type="text/javascript">
      setTimeout(pagina,1);
      function pagina(){
        window.location.href="mostrar.php";

      }
</script> <link rel="icon" href="imagens/favicon.png">-->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!--  HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  </body>
  </html>	
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "formas";
$var1 = $_GET['codigo'];
$var2 = $_GET['arquivo'];
if(isset($var1)){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
echo $_GET['arquivo'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!unlink("upload/".$_GET['arquivo']))
{
  echo ("Erro ao deletar $arquivo");
}
else
{
  echo ("Deletado com sucesso!");
}
$sql = "delete from produto where codigo = $var1";
$stmt = $conn->prepare($sql);
$stmt->execute();
if ($stmt->errno) {
	echo "Erro";
    
}
$stmt->close();
$conn->close();
}else{
echo "Erro";	
}
?>
