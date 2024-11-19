<?php
    include('../user-validate/valida.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #000;
            color: white;
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            background-color: #1d1d1d;
            padding: 15px;
            border-radius: 8px;
            color: white;
            margin-bottom: 20px;
            text-align: center;
        }

        .back-button {
            background-color: #363636;
            padding: 10px;
            border-radius: 50px;
            width: 150px;
            text-align: center;
            margin-bottom: 30px;
            transition: background-color 0.3s;
        }

        .back-button a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        .back-button:hover {
            background-color: #575757;
        }

        /* Layout de grade para os usuários */
        .user-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr); /* 5 colunas */
            gap: 20px;
        }

        .user-box {
            background-color: rgba(0, 123, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            text-align: left;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .user-box:hover {
            background-color: rgba(0, 123, 255, 0.4);
        }

        .user-info {
            margin-bottom: 10px;
        }

        hr {
            border: 0;
            height: 1px;
            background: #333;
            margin: 20px 0;
        }

        /* Para telas menores, ajusta o grid */
        @media (max-width: 1200px) {
            .user-grid {
                grid-template-columns: repeat(3, 1fr); /* 3 colunas em telas menores */
            }
        }

        @media (max-width: 768px) {
            .user-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 colunas em tablets */
            }
        }

        @media (max-width: 480px) {
            .user-grid {
                grid-template-columns: 1fr; /* 1 coluna em celulares */
            }
        }
    </style>
</head>
<body>
    <h1>Usuários cadastrados</h1>

    <div class="back-button">
        <a href="../user-main/main.php">Voltar</a>
    </div>

    <div class="user-grid">
        <?php
            include('../conexao.php');

            $sql = 'SELECT * FROM USERS';

            if (!$resultado = $conn->query($sql)) {
                die("Erro ao buscar dados");
            }

            while ($row = $resultado->fetch_assoc()) {
                echo '<div class="user-box">';
                echo '<div class="user-info"><strong>ID:</strong> ' . $row['id'] . '</div>';
                echo '<div class="user-info"><strong>Email:</strong> ' . $row['email'] . '</div>';
                echo '<div class="user-info"><strong>Usuário:</strong> ' . $row['firstName'] . '</div>';
                echo '<div class="user-info"><strong>Senha:</strong> ' . $row['password'] . '</div>';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>