<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<h1>Cadastrar Contato</h1>

<form action="salvar.php" method="POST">
    <label for="id">ID:</label><br>
    <input type="hidden" name="id" value=""><br><br>
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" required><br><br>
    <label for="email">E-mail:</label><br>
    <input type="email" name="email" required><br><br>
    <label for="telefone">Telefone:</label><br>
    <input type="text" name="telefone" placeholder="Telefone" required><br><br>
    <button type="submit">Salvar</button>
    <button type="reset">Limpar</button>
</form>

<hr>

<h2>Lista de Contatos</h2>

<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Telefone</th>
</tr>

<?php
$sql = "SELECT * FROM contatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['nome']}</td>
            <td>{$row['email']}</td>
            <td>{$row['telefone']}</td>
            <td>
                <a href='editar.php?id={$row['id']}'>Editar</a> |
                <a href='excluir.php?id={$row['id']}'>Excluir</a>
            </td>
        </tr>";
    }
}
?>
</table>
</body>
</html>
