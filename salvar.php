<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if ($id == "") {
    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
} 

$conn->query($sql);
header("Location: index.php");
exit;
?>
