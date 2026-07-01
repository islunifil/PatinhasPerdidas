<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idAnimal = $_POST['idAnimal'] ?? null;
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefone = $_POST['telefone'] ?? null;

    if (!$idAnimal || !$nome || !$email || !$telefone) {
        echo "Erro: preencha todos os campos.";
        exit;
    }

    // Salvar adoção (AGORA COM OS CAMPOS CERTOS)
    $stmt = $db->prepare("INSERT INTO Adocao (nome, email, telefone, idAnimal) VALUES (?, ?, ?, ?) ");
    $stmt->execute([$nome, $email, $telefone, $idAnimal]);

    // Atualizar status do animal
    $update = $db->prepare(" UPDATE Animal SET status = 'Em processo de adoção' 
    WHERE idAnimal = ?");
    $update->execute([$idAnimal]);

    echo "<h1>Pedido de adoção enviado com sucesso!</h1>";
    echo "<p>Entraremos em contato em breve 💛</p>";
    echo "<a href='index.php'>Voltar para a página inicial</a>";
}
?>
