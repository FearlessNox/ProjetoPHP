<?php
    include("../user-validate/valida.php");
?>

<html>
    <title>Cadastro</title>
    <head>
    <link rel="stylesheet" href="./cadastroUsuarios.css">
    <script src="./cadastroUsuarios.js" defer></script>
    </head>
    <div class="form-container">
        <h1>Cadastrar Usuário</h1>
        <form method="post" action="gravarUsuario.php" id="user-form">
            <label for="firstName">Primeiro Nome:</label>
            <input type="text" name="firstName" id="firstName" required>

            <label for="lastName">Último Nome:</label>
            <input type="text" name="lastName" id="lastName" required>

            <label for="email">Email:</label>
            <input type="text" name="email" id="user-email" required>
            <p id="user-email-desc"></p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="user-password" required>
            <p id="user-password-desc"></p><br>
            <input type="submit" value="Enviar" id="form-submit">
        </form>

        <div class="back-button">
            <h1><a href="../user-main/main.php">Voltar</a></h1>
        </div>
    </div>

</body>
</html>