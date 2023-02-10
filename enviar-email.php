<?php

// Valores recebidos do formulário

$nome = $_POST['nomesobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];



// Corpo do e-mail

$arquivo = "
  <html>
        <p><b>Nome: </b>$nome</p>
        <p><b>E-mail: </b>$email</p>
        <p><b>Telefone: </b>$telefone</p>
  <html>
";

 

//email para quem será enviado o formulário
$destino = "rogeriomorelatto@gmail.com";





  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";


?>