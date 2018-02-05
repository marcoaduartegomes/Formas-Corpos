<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <script type="text/javascript">
      setTimeout(pagina,1);
      function pagina(){
        window.location.href="mostrar.php";

      }
</script>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cantinho da Vila</title>
   <!--  <link rel="icon" href="imagens/favicon.png">-->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<button class="btn btn-danger" type="submit" name="codigo" onclick="javascript: location.href= 'mostrar.php'; ">Voltar</button>

  </body>
  </html>	
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";
$var1 = $_GET['codigo'];
if(isset($var1)){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "delete from arquivo where codigo = $var1";
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
