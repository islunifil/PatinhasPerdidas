<?php
require 'conexao.php';

$mensagem = "";
$valorDoado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $valor = $_POST['valor'];

    // Inserir no banco de dados
    $stmt = $db->prepare("INSERT INTO Doacao (valor) VALUES (?)");
    $stmt->execute([$valor]);

    // Guardar dados da doação
    $mensagem = "Doação realizada com sucesso! ";
    $valorDoado = $valor;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doações</title>
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
    <section class="doacao">
        <h2>Ajude os animais</h2>
        <p>Sua doação ajuda a alimentar, cuidar e encontrar um lar para animais abandonados. <br>Qualquer valor faz a diferença &#x1F49B</br> </p>

        <!-- FORMULÁRIO -->
        <form action="doacao.php" method="POST">
            <label>Valor da doação (R$):</label>
            <input type="number" name="valor" step="0.01" required>
            <button type="submit" class="btn">Doar</button>
        </form>

        <!-- MENSAGEM DE SUCESSO -->
        <?php if ($mensagem): ?>
            <div class="mensagem-sucesso" style="
                margin-top:20px;
                padding:15px;
                background:rgba(251, 148, 110, 0.73);
                border-radius:8px;
                color:black;
                font-size:18px;">
                
                <strong><?= $mensagem ?></strong><br>
                Você doou: <strong>R$ <?= number_format($valorDoado, 2, ',', '.') ?></strong><br>
                Obrigada por ajudar nossos animais! 🐾💛
            </div>
        <?php endif; ?>

    </section>
</main>

</body>
</html>
