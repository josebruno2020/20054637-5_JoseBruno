<?php

$title = 'Contato';
$page = 'contato';
$css = 'contato.css';
if(isset($_SESSION['mensagem'])) {
    unset($_SESSION['mensagem']);
}

//Form
if($_POST && !empty($_POST)) {
    $nome = filter_input(INPUT_POST, 'nome');

    $_SESSION['mensagem'] = "$nome, sua mensagem foi enviada com sucesso!";
    // $mensagem = $_SESSION['mensagem'];
    header("Location: /?page=contato");
}

