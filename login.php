<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Conecta Digital</title>
</head>
<body>
    <h1>Login</h1>
    <form action="controllers/loginController.php" method="POST">
        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <!-- Senha -->
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <!-- Botão de Login -->
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
