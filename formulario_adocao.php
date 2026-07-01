<?php
// Recebe o ID do animal da URL
if (!isset($_GET['idAnimal'])) {
    echo "Animal não encontrado.";
    exit();
}
$idAnimal = $_GET['idAnimal'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Adoção</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Patinhas Perdidas</h1>
    <nav>
      <a href="index.php">Início</a>
      <a href="index.php">Adoção</a>
      <a href="doacao.php">Doações</a>
    </nav>
  </header>

  <main>
    <section class="form-adocao">
      <h2>Formulário de Adoção</h2>
      <form action="processa_adocao.php" method="POST">

  <input type="hidden" name="idAnimal" value="<?= $idAnimal ?>">

  <label>Nome:</label>
  <input type="text" name="nome" required>

  <label>Email:</label>
  <input type="email" name="email" required>

  <label>Telefone:</label>
  <input type="tel" name="telefone" required>

  <button type="submit">Enviar Solicitação</button>
</form>
      <p id="mensagem"></p>
    </section>
  </main>
</body>
</html>