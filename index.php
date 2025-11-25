<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js"></script>
</head>
<body>
<div class="container">
    <h2>Cadastrar Contato</h2>

    <form action="salvar.php" method="POST">
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" placeholder="Telefone" required>
        </div>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>

    <hr>

    <h2>Lista de Contatos</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>

        <?php
        $sql = "SELECT * FROM contatos ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // escapar saída para evitar XSS
                $id = htmlspecialchars($row['id']);
                $nome = htmlspecialchars($row['nome']);
                $email = htmlspecialchars($row['email']);
                $telefone = htmlspecialchars($row['telefone']);

                echo "<tr>
                    <td>{$id}</td>
                    <td>{$nome}</td>
                    <td>{$email}</td>
                    <td>{$telefone}</td>
                    <td class='actions'>
                        <a href='editar.php?id={$id}'>Editar</a> |
                        <a href='excluir.php?id={$id}' onclick='return confirmarExclusao();'>Excluir</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum contato cadastrado.</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
