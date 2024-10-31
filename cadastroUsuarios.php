<?php
    include("valida.php");
?>

<html>
    <title>Cadastro</title>
    <head>
    <style>
        /* Estilo básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0b0d1b; /* Fundo preto espacial */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container do formulário */
        .form-container {
            background-color: #111727; /* Preto ligeiramente mais claro */
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        h1 a {
            text-decoration: none;
            color: #00bfff; /* Ciano */
            font-size: 18px;
            transition: color 0.3s;
        }

        h1 a:hover {
            color: #0077ff; /* Azul claro */
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 16px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #1a233b;
            color: white;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0077ff; /* Azul claro */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #00bfff; /* Ciano */
        }

        .back-button {
            margin-top: 20px;
            display: block;
            text-align: center;
        }   
    </style>
    </head>
    <div class="form-container">
        <h1>Cadastrar Usuário</h1>
        <form method="post" action="gravarUsuario.php">
            <label for="firstName">Primeiro Nome:</label>
            <input type="text" name="firstName" id="firstName" required>

            <label for="lastName">Último Nome:</label>
            <input type="text" name="lastName" id="lastName" required>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Enviar">
        </form>

        <div class="back-button">
            <h1><a href="main.php">Voltar</a></h1>
        </div>
    </div>

</body>
</html>