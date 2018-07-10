<?php
//error_reporting(0);
require_once __DIR__.'/connect.php';
 //getDadoTabela.php retorna do banco de dados todos os valores de um certo codigo para preencher a tabela via ajax 
$dataInicio = $_POST["diaInicio"];
if(isset($_POST["diaFim"])){
  $dataFim = $_POST["diaFim"];
}
$estatus = $_POST["estatus"];
if($dataInicio == ""){echo json_encode('');} else{
  if(!$dataFim){
  if($estatus == "todos"){
    $query = "SELECT servico.nome, preco, sum(preco) as montante from consulta inner join servico on codServico = servico.codigo where LOCATE('$dataInicio',start) group by servico.nome";  
  }else{
    $query = "SELECT servico.nome, preco, sum(preco) as montante from consulta inner join servico on codServico = servico.codigo where LOCATE('$dataInicio',start) and estatus = '$estatus' group by servico.nome";  
  }}else{
if($estatus == "todos"){
    $query = "SELECT servico.nome, preco, sum(preco) as montante from consulta inner join servico on codServico = servico.codigo where start between '$dataInicio' and '$dataFim' group by servico.nome";  
  }else{
    $query = "SELECT servico.nome, preco, sum(preco) as montante from consulta inner join servico on codServico = servico.codigo where start between '$dataInicio' and '$dataFim' and estatus = '$estatus' group by servico.nome";  



  }}
  $result = mysqli_query($conn, $query);
  $rowcount=mysqli_num_rows($result);

  while($resultado = mysqli_fetch_assoc($result)){
    $vetor[] = array_map('utf8_encode', $resultado); 
  }

  if($rowcount==0) { $vetor[] = "{nome: '0', preco: '0', montante: '0'}";

}else{
       $vetor["data"] =  $vetor; // junta o vetor com o DATA para ser do tipo json 
     }
     echo json_encode($vetor);
   }


   ?>