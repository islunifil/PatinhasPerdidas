<?php
require 'conexao.php';

$idAnimal = $_GET['id'] ?? null;   

if (!$idAnimal) {
    echo "Animal não encontrado.";
    exit;
}

$stmt = $db->prepare("SELECT * FROM Animal WHERE idAnimal = ?");
$stmt->execute([$idAnimal]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$animal) {
    echo "Animal não encontrado.";
    exit;
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
    <a href="doacao.php">Doações</a>
  </nav>
</header>

<main>
<section class="detalhes-animal">
    <img src="<?= $animal['foto'] ?>" alt="<?= $animal['nome'] ?>">

    <h2><?= $animal['nome'] ?></h2>

    <p><strong>Espécie:</strong> <?= $animal['especie'] ?></p>
    <p><strong>Idade:</strong> <?= $animal['idade'] ?></p>
    <p><strong>Porte:</strong> <?= $animal['porte'] ?></p>
    <p><strong>Descrição:</strong> <?= $animal['descricao'] ?></p>

    <a href="formulario_adocao.php?idAnimal=<?= $animal['idAnimal'] ?>" class="btn">
      Quero Adotar
    </a>
  </section>
   <!-- <section class="detalhes-animal">
      <img src="cachorro.jpg" alt="Cachorro">
      <h2>Bella</h2>
      <p><strong>Espécie:</strong> Cachorra</p>
      <p><strong>Idade:</strong> 1 ano</p>
      <p><strong>Porte:</strong> Médio</p>
      <p><strong>Descrição:</strong> Muito dócil e obediente,adora receber atenção.</p>
      <a href="formulario_adocao.php?id=<?= $animal['idAnimal'] ?>" class="btn">Quero Adotar</a>
      </section>
     -->
</main>
</body>
</html>
