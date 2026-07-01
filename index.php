<?php
require 'listar_animais.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinhas Perdidas</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
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
    <section class="busca">
     <h2>Encontre seu novo amigo</h2>
      <form id="formBusca">
       <input type="text" id="buscaNome" placeholder="Buscar por nome ou espécie">
        <select id="buscaPorte">
         <option value="">Selecione o porte</option>
         <option>Pequeno</option>
         <option>Médio</option>
         <option>Grande</option>
        </select>
        <button type="submit">Buscar</button>
      </form>
    </section>
   <section class="lista-animais" id="listaAnimais">
     <h2>Animais disponíveis</h2>
     <?php foreach ($animais as $animal): ?>
  <div class="card" 
       data-nome="<?= strtolower($animal['nome']) ?>" 
       data-especie="<?= strtolower($animal['especie']) ?>" 
       data-porte="<?= $animal['porte'] ?>">

    <img src="<?= $animal['foto'] ?>" alt="<?= $animal['nome'] ?>">

    <h3><?= $animal['nome'] ?></h3>

    <p>
      <?= $animal['especie'] ?> • 
      <?= $animal['idade'] ?> • 
      <?= $animal['porte'] ?>
    </p>

    <a href="animal.php?id=<?= $animal['idAnimal'] ?>">Ver mais</a>
  </div>
<?php endforeach; ?>
   </section>
  </main>
 </body>
</html>