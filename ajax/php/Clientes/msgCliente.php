<?php
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $assunto = $_POST['assunto'];
  mail($email,$assunto,$mensagem,'From: teste.formas.gostosas@gmail.com');

  header('Location: ../../Clientes.php');

?>