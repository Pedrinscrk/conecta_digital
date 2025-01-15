<?php
// Ativar exibição de erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir a conexão com o banco de dados
include '../includes/db.php';

// Verificar se o formulário foi enviado corretamente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receber os dados do formulário
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validação simples para verificar se os campos estão preenchidos
    if (empty($name) || empty($email) || empty($password)) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    // Criptografar a senha antes de salvar
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Inserir o usuário no banco de dados
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => $hashedPassword
        ]);

        // Redirecionar para a página de login após o cadastro
        header('Location: ../login.php');
        exit;
    } catch (PDOException $e) {
        // Verificar se o email já está cadastrado
        if ($e->getCode() === '23000') {
            echo "Erro: O email já está cadastrado.";
        } else {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
    }
} else {
    echo "Erro: Método inválido.";
}
?>