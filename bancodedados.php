<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS usuarios_db";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso!";
} else {
    echo "Erro ao criar banco de dados: " . $conn->error;
}

$conn->close();
?>
