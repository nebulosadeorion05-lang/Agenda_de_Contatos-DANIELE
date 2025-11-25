<?php
include "conexao.php";

$id = isset($_POST['id']) ? trim($_POST['id']) : '';
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';

if ($nome === '' || $email === '' || $telefone === '') {
    
    header("Location: index.php");
    exit;
}

if ($id === '') {
    
    $stmt = $conn->prepare("INSERT INTO contatos (nome, email, telefone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $telefone);
    $stmt->execute();
    $stmt->close();
} else {
 
    $stmt = $conn->prepare("UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id = ?");
    $stmt->bind_param("sssi", $nome, $email, $telefone, $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: index.php");
exit;
?>
