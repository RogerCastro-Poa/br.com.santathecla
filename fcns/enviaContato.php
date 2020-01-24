<?php

$assunto = $_POST['assunto'];

$corpo = "
    SOLICITAÇÃO PELO FORMULÁRIO DE CONTATO
    ASSUNTO: " . $_POST['assunto'] . "
    NOME: " . $_POST['nome'] . "
    WHATSAPP: " . $_POST['telefone'] . "
    EMAIL: " . $_POST['email'] . "
    MENSAGEM: " . $_POST['mensagem'] . "
        
        ";
mail('santathecla@gmail.com', $assunto, $corpo, 'From: adm@santathecla.com.br');

header('Location: ../index.html');
?>
