<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id=$id";
$result = $conn->query($sql);
$contato = $result->fetch_assoc();
?>

<form action="salvar.php" method="POST">
    <input type="hidden" name="id" value="<?= $contato['id'] ?>">
    <input type="text" name="nome" value="<?= $contato['nome'] ?>">
    <input type="email" name="email" value="<?= $contato['email'] ?>">
    <input type="text" name="telefone" value="<?= $contato['telefone'] ?>">
    <button type="submit">Salvar</button>
</form>
