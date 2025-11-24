<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de Contatos</title>
</head>
<body>
  <h1>Cadastro de Contatos</h1>
  <div class="form-container">
  <form method="post" action="editar.php">
    <label for="ID">ID:</label><br>
    <input type="number" id="ID" name="ID" required><br><br>
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="telefone">Número de Telefone:</label><br>
    <input type="number" id="telefone" name="telefone"><br><br>
    <button type="submit" name="editar.php">Cadastrar</button>
    <button type="reset">Limpar</button>
  </form>
  </div>
  <h2>Excluir Contato</h2>
  <div class="form-container">
  <form method="post" action="excluir.php">
    <label for="ID">ID:</label><br>
    <input type="number" id="ID" name="ID" required><br><br>
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="telefone">Número de Telefone:</label><br>
    <input type="number" id="telefone" name="telefone"><br><br>
    <button type="submit" name="excluir.php">Excluir</button>
    <button type="reset">Limpar</button>
  </form>
  </div>
</body>
</html>
