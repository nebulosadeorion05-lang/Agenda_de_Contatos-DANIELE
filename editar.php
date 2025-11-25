<?php
include "conexao.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$contato = null;

if ($id > 0) {
    $stmt = $conn->prepare("SELECT id, nome, email, telefone FROM contatos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $contato = $res->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js"></script>
</head>
<body>
<div class="container">
    <h2>Editar Contato</h2>

    <?php if (!$contato): ?>
        <p>Contato não encontrado. <a href="index.php">Voltar</a></p>
    <?php else: ?>
        <form action="salvar.php" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($contato['id']) ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($contato['nome']) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($contato['email']) ?>" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" value="<?= htmlspecialchars($contato['telefone']) ?>" required>
            </div>

            <button type="submit">Salvar</button>
            <a href="index.php"><button type="button">Cancelar</button></a>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
