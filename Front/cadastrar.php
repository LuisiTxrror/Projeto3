<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastrar.css">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="../php/registrar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <label for="confirmar_senha">Confirme sua senha:</label>
        <input type="password" name="confirmar_senha" required>
        <br>
        <button type="submit">CADASTRAR</button>
    </form>
    <p><a href="../Front/index.php">Já tem uma conta? Faça login</a></p>
</body>
</html>
</html>