<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $valor = $_POST['valor'];

    // Inserir no banco de dados
    $stmt = $db->prepare("INSERT INTO Doacao (valor) VALUES (?)");
    $stmt->execute([$valor]);

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação Concluída</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff7e6;
            text-align: center;
            padding: 50px;
            color: #5a3900;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #ff9900;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background-color: #ff9900;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            background-color: #e68a00;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Doação realizada com sucesso!</h1>

    <p>Seu apoio faz TODA a diferença para os animais do Patinhas Perdidas! </p>

    <p><strong>Valor doado:</strong> R$ <?= number_format($valor, 2, ',', '.') ?></p>

    <a href="index.php">Voltar ao início</a>
</div>

</body>
</html>
