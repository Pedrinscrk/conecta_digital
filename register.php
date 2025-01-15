<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Conecta Digital</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="controllers/registerController.php" method="POST">
        <!-- Nome -->
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <!-- Senha -->
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <!-- Botão de Cadastro -->
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>