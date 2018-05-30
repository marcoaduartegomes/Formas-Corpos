<?php
// Deletar.php pega o codigo do servico e deleta ele da lista de servicos no banco de dados
require_once __DIR__.'/connect.php';



if(isset($_POST['codigo'])){
	$var1 = $_POST['codigo'];
	


	$sql = "delete from servico where codigo = $var1";
	$results = mysqli_query($conn, $sql);  


}


		
	echo $sql;


	?>