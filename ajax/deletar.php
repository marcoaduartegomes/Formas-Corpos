
<?php

require_once __DIR__.'/connect.php';



if(isset($_POST['codigo'])){
   $var1 = $_POST['codigo'];
  $query = "SELECT * FROM produto WHERE codigo = $var1";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);
 

$sql = "delete from produto where codigo = $var1";
$results = mysqli_query($conn, $sql);  

    
}
if($row['arquivo']==0){}else
if (!unlink("upload/".$row['arquivo']))
{
  echo ("Erro ao deletar $arquivo");
}
else
{
  echo ("Deletado com sucesso!");

}
echo json_encode($row);
echo $sql;

   
?>