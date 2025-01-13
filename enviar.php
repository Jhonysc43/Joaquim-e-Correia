<?php

$para = "jhonatan.bsb2014@gmail.com";
$assunto = "Email do Site Jhonatan & Correia";
$mensagem = utf8_decode('Nome: '.$_POST['nome']. "\r\n"."\r\n" . 'Telefone: '.$_POST['telefone']. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$_POST['mensagem']);
$dest = $_POST['email'];

$cabecalhos = "From: " .$dest;

mail($para, $assunto, $mensagem, $cabecalhos);
?>

<script>alert('Enviado com Sucesso.'); </script>

<script language='javascript'>window.location='index.php#contatos'; </script>

