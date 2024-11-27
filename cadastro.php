<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

   
    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $senha)) {
        echo "A senha deve ter pelo menos 8 caracteres, com letras, números e caracteres especiais.";
        exit;
    }

   
    $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO usuarios (nome, usuario, senha, cpf) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $usuario, $hashedPassword, $cpf]);

    echo "Cadastro realizado com sucesso!";
    header("Location: login.php");  
?>
