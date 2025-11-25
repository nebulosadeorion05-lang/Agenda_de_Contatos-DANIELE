<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "agenda";

$conn = new mysqli($host, $usuario, $senha);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sqlDB = "CREATE DATABASE IF NOT EXISTS `$banco` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if (!$conn->query($sqlDB)) {
    die("Erro ao criar banco de dados: " . $conn->error);
}

$conn->select_db($banco);

$sqlTable = "CREATE TABLE IF NOT EXISTS contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (!$conn->query($sqlTable)) {
    die("Erro ao criar tabela: " . $conn->error);
}

$conn->set_charset("utf8mb4");
?>
