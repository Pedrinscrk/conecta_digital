<?php
// Ativar exibição de erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir a conexão com o banco de dados
include '../includes/db.php';
session_start(); // Iniciar a sessão

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receber os dados do formulário
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Verificar se os campos foram preenchidos
    if (empty($email) || empty($password)) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    try {
        // Consultar o email no banco de dados
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar se o email existe e se a senha está correta
        if ($user && password_verify($password, $user['password'])) {
            // Login bem-sucedido: Criar sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirecionar para o painel do cliente
            header('Location: ../pages/dashboard.php');
            exit;
        } else {
            // Login falhou
            echo "Erro: Email ou senha inválidos.";
        }
    } catch (PDOException $e) {
        echo "Erro ao fazer login: " . $e->getMessage();
    }
} else {
    echo "Erro: Método inválido.";
}
?>