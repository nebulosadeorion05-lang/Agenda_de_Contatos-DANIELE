<?php
require_once "conexao.php";

if(isset($_POST["excluir"])) {

    $ID = isset($_POST["ID"]) ? (int)$_POST["ID"] : null;

    $stmt = $conexao->prepare("DELETE FROM contatos WHERE ID = ?");
    if ($stmt === false) {
        header("Location: index.php");
        exit;
    }
    $stmt->bind_param("i", $ID);

    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit;
}
?>
