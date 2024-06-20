<?php
// Configurações do banco de dados
$host = 'localhost'; // Endereço do servidor MySQL
$dbname = 'diyroyalt'; // Nome do banco de dados
$username = 'diyroyalt'; // Nome de usuário do banco de dados
$password = 'diyroyalt'; // Senha do banco de dados

// Tentar se conectar ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configuração adicional do PDO, se necessário
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Se ocorrer um erro ao se conectar, exibir uma mensagem de erro
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>