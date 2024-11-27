<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        echo "Login bem-sucedido! Bem-vindo, " . $user['nome'];
        header("Location: dashboard.php");
    } else {
        echo "Usuário ou senha incorretos!";
    }
}
?>
