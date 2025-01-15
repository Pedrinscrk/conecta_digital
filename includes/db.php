<?php
$host = 'localhost';          // Servidor
$dbname = 'conecta_digital';  // Nome do banco de dados
$user = 'root';               // Usuário padrão no XAMPP
$password = '';               // Senha padrão (vazia no XAMPP)

try {
    // Criar a conexão com PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configurar para exibir exceções
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>