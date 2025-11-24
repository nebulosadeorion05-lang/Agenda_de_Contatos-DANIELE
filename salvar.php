<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if ($id == "") {
    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
} else {
    $sql = "UPDATE contatos SET
            nome='$nome',
            email='$email',
            telefone='$telefone'
            WHERE id=$id";
}

$conn->query($sql);
header("Location: index.php");
exit;
?>
