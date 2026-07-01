<?php
require 'conexao.php';

// Buscar todos os animais disponíveis
$query = $db->query("SELECT * FROM Animal"); $animais = $query->fetchAll(PDO::FETCH_ASSOC);
?>
