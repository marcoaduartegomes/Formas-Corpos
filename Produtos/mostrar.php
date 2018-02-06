<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formas&Corpos</title>
    <link rel="icon" href="../favicon.png">

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  </head>

  <body >
  
     <?php
     include '../header.php';
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

$exist = "select arquivo,nome,codigo,data,quantidade from arquivo";

?>
<div style="overflow-x:auto;max-height: 74%;">
<table  class="table table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>Imagem</th>
                                        <th>Nome do Produto</th>
                                        <th>Quantidade</th>
                                        <th>Hora(ultima modificação)</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

    $valido = mysqli_query($conn,$exist);
    while($resultado =  $valido->fetch_array()){
    
        
            ?>
                                    <tr><td> <?php echo $resultado['arquivo'];?><img src="upload/<?php if($resultado['arquivo'] !=NULL){echo $resultado['arquivo']; }else{echo 'SemImagems.jpg';}?>" height="70" width="70"> </td>
        <td><?php echo  $resultado['nome']; ?>
        <td><?php echo  $resultado['quantidade']; ?>
        <td><?php echo $resultado['data']; ?></td>
           
    <td> <form action="alterar.php" method="POST"><button  type="submit" name="alterar" value="<?php echo $resultado['codigo']; ?>">Alterar</button> </form> 
         <button class="btn btn-danger" type="button" name="codigo" onclick="javascript: location.href= 'deletaProduto.php?codigo=<?php echo $resultado['codigo']; ?>&arquivo=<?php echo $resultado['arquivo']; ?>'"'; ">Apagar</button>    </td>

    <?php } ?>
    
    </tr>

        


  </tbody>
</table>
</div>
<?php include '../footer.php'; ?>
    </body>
</html>