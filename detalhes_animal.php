<?php
require 'conexao.php';

// Verifica se recebeu o ID do animal pela URL
if (!isset($_GET['id'])) {
    echo "Animal não encontrado.";
    exit();
}

$id = $_GET['id'];

// Buscar o animal específico
$stmt = $db->prepare("SELECT * FROM Animal WHERE idAnimal = ?");
$stmt->execute([$id]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);

// Caso o animal não exista
if (!$animal) {
    echo "Animal não encontrado.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes do Animal</title>
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
    <section class="detalhes-animal">
      <img src="gato.jpg" alt="Gato">
      <h2>Oliver</h2>
      <p><strong>Espécie:</strong> Gato</p>
      <p><strong>Idade:</strong> 2 anos</p>
      <p><strong>Porte:</strong> Pequeno</p>
      <p><strong>Descrição:</strong> Muito brincalhão e carinhoso.</p>
      <a href="formulario_adocao.php" class="btn">Quero Adotar</a>
    </section>
  </main>
  <main>
    <section class="detalhes-animal">
      <img src="cachorro.jpg" alt="Cachorro">
      <h2>Bella</h2>
      <p><strong>Espécie:</strong> Cachorra</p>
      <p><strong>Idade:</strong> 1 ano</p>
      <p><strong>Porte:</strong> Médio</p>
      <p><strong>Descrição:</strong> Muito dócil e obediente,adora receber atenção.</p>
      <a href="formulario_adocao.php" class="btn">Quero Adotar</a>
    </section>
  </main>
</body>
</html>