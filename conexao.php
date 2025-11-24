<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "agenda";

$conn = new mysql("$host, $usuario, $senha, $agenda");

if($conn->conect_error) {
  die("Falha na conexão: ". $conn->conect_error);
}

CREATE DATABASE agenda;
USE agenda;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);
?>
