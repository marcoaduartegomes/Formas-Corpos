
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
include 'header.php';
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
      echo "<script>
      window.location.href ='ProdutoMostrar.php';
      </script>";
    }else
      $msg = "Falha ao enviar arquivo.";
  }
?>
<div style="overflow-x:auto;max-height: 74%;">

<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"  ;  ?>
<br>
<div class="container border border-primary" >
  <h1>Cadastro de Protudo</h1>
<div class="invalid-feedback">Example invalid feedback text</div>
<form action="ProdutoUpload.php" method="POST" enctype="multipart/form-data" class="was-validated" id="form1" autocomplete="off">
	<div class="custom-control custom-radio">
    <input type="radio"  checked class="custom-control-input" id="customControlValidation2" name="radio-stacked" required onClick=comFoto()>
    <label class="custom-control-label" for="customControlValidation2">Com foto</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required onClick=semFoto()>
    <label class="custom-control-label" for="customControlValidation3">Sem foto</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>


 
  <div  id ="escolha">
    <div class="col-sm-6">
    <label for="validatedCustomFile" class="col-sm-2 col-form-label">Foto</label>
    <div class="custom-file">
 
  	<input type="file" name="arquivo" accept="image/*" class="custom-file-input" id="validatedCustomFile" required >

    <img id="preview" style="height: 0px;"></img>
  	<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
  	<div class="invalid-feedback">Selecione uma imagem</div>
    
  	<input type="button" value="zerar" class="btn btn-danger" onclick="zerar()">
  </div>
</div>
</div>
 <br><br>

 <div class="form-group row">
 <label for="nome_real" >Nome</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="nome_real" id="nome_real" placeholder="Nome" required>
    </div>
    <br><br>
 <label for="quantidade" >Quantidade</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade" required>
    </div>
    <br><br><br>
    <div class="col-sm-10">
      <button type="submit" value="Salvar" class="btn btn-primary">Salvar</button>
    </div>
    </div>






</form>
</div>
<script type="text/javascript">
  var reader = new FileReader();
 


	function semFoto()
{

     document.getElementById("preview").style.height = "0px";
     document.getElementById("validatedCustomFile").required=false;
     document.getElementById("escolha").style.visibility = 'hidden';
     document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
     $("#preview").css('display', 'none').attr('src', '');

     
}
function zerar()
{

     document.getElementById("preview").style.height = "0px";
     document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
     $("#preview").css('display', 'block').attr('src', '');

     
}
	function comFoto()
{
     document.getElementById("validatedCustomFile").required=true;
     document.getElementById("escolha").style.visibility = 'visible';
    // $("#validatedCustomFile").clone().replaceWith($("#validatedCustomFile"));
     $("#preview").css('display', 'block').attr('src', '');
}


document.getElementById("validatedCustomFile").onchange = function () {

    document.getElementById("preview").style.height = "150px";
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

</script>
</div>
<?php include 'footer.php'; ?>
</body>
</html>