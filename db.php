<?php
$host = 'localhost';
$dbname = 'sistema_usuarios';
$username = 'root';  // Usuário padrão do MySQL
$password = '';  // Senha padrão do MySQL

// Conexão com o banco de dados MySQL
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>
