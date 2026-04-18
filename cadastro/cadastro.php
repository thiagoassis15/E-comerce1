<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nomeCompleto = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $casa_num = $_POST['casa_num'];
    $senha = $_POST['senha'];
    
    $partes = explode(' ', $nomeCompleto);
    $primeiroNome = $partes[0];
    
    $_SESSION['primeiro_nome'] = $primeiroNome;
    
    header("Location: ../index/index.php");
    exit();
}
?>