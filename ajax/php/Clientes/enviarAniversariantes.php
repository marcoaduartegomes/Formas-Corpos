<?php
  $email= $_POST['email'];
  $mensagem= $_POST['msganiversario'];
  $assunto = "Feliz Aniversário!";
  mail($email,$assunto,$mensagem,'From: teste.formas.gostosas@gmail.com');

  header('Location: ../../Clientes.php');
?>