<?php

require_once __DIR__.'/connect.php';
 //insert.php tem duas variações, uma de criar um produto novo e uma de alterar um produto existente.
$nome = $_POST["nome"];
$inicio = $_POST["inicio"];
$final = $_POST["final"];
$servico = $_POST["servico"];
$descricao = $_POST["descricao"];
$alterando = $_POST["alterando"];
$codConsulta = $_POST["codConsulta"];
 // caso ele n exista, sera executado uma query para criar um novo produto
$queryCodigo = "select codigo from cliente where nome = '$nome'";
$codigo = mysqli_query($conn, $queryCodigo);   
$row = $codigo->fetch_array(MYSQLI_NUM);
if ($row[0]==NULL){
		header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => 'ERROR', 'code' => 1337)));

}else{

if($alterando == "0")
{
$query = "  
insert into consulta(start,end,codServico,codCliente,allDay,className,description)
values ('$inicio','$final','$servico','$row[0]',false,'important','$descricao')";
}else{
$query = "  
update consulta
set start ='$inicio' ,end = '$final',codServico = '$servico',codCliente = '$row[0]',className = 'important',description = '$descricao'
where codigo = '$codConsulta' ";



}

$result = mysqli_query($conn, $query);    
  echo $query; // retorna os dados para conferir o json



}
  ?>