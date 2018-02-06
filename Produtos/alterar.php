<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formas&Corpos</title>
    <link rel="icon" href="../favicon.png">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="jquery-3.2.1.min.js"></script>
    
    
  </head>

  <body>
   
<?php
include '../header.php';
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_errno)
  echo "Falha na conexão: (".$conn->connect_errno.") ".$conn->connect_error;



if(isset($_POST['mudando'])){
   echo $_POST['codigo'];
    $sql_code = "update arquivo set nome='".$_POST['nome_real']."', data=NOW(),quantidade=".$_POST['quantidade']." where codigo = '".$_POST['codigo']."'";
    if($conn->query($sql_code)){
      echo  "Arquivo enviado com sucesso!";
      echo "<script>
      window.location.href ='mostrar.php';
      </script>";
    }else
      echo "Falha ao enviar arquivo.";
  }


if(isset($_POST['alterar'])){
$exist = "select arquivo,nome,codigo,data,quantidade from arquivo where codigo ='".$_POST["alterar"]."'";
if($conn->query($exist)){
  foreach($conn->query($exist) as $saida)
 
$nome_real = $saida['nome'];
if($saida['arquivo']){

  ?>
  <div style="overflow-x:auto;max-height: 74%;">
  <body onload="caixinhacom()">

        <?php
    }else{ ?>
    <body onload="caixinhasem()">
      <?php
    }?>

     <form action="alterar.php" method="POST" enctype="multipart/form-data" class="was-validated" id="form1" autocomplete="off">
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required onClick=comFoto()>
    <label class="custom-control-label" for="customControlValidation2">Com foto</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required onClick=semFoto()>
    <label class="custom-control-label" for="customControlValidation3">Sem foto</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>


  Foto: 
  <div class="custom-file" id ="escolha">

    <input type="file" name="arquivo" accept="image/*" class="custom-file-input" id="validatedCustomFile" required >
    <img id="preview"></img>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
    <input type="reset" value="zerar">
  </div>
 <br><br>
 <input type="text" readonly="readonly" value="<?php echo $saida['codigo']; ?>" name="codigo">
 <input type='text' name="nome_real"  value ="<?php echo $nome_real ?>" required>
 <input type="number" value="<?php echo $saida['quantidade']; ?>" name="quantidade">
  <input type="submit" value="Salvar" name="mudando">





</form>
      <?php
    }else
      $msg = "Falha ao enviar arquivo.";
  }



?>


</div>
<?php include '../footer.php'; ?>
</body>
<script>
        function semFoto()
{

     
     document.getElementById("validatedCustomFile").required=false;
     document.getElementById("escolha").style.visibility = 'hidden';
     document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
     $("#preview").css('display', 'none').attr('src', '');

     
}
  function comFoto()
{
     document.getElementById("validatedCustomFile").required=true;
     document.getElementById("escolha").style.visibility = 'visible';
    // $("#validatedCustomFile").clone().replaceWith($("#validatedCustomFile"));
     $("#preview").css('display', 'block').attr('src', '');
}
      function caixinhacom(){
        comFoto();
        document.getElementById("customControlValidation2").checked=true;   


      }
      function caixinhasem(){
      semFoto();
        document.getElementById("customControlValidation3").checked=true;   


      }

    </script>

</html>